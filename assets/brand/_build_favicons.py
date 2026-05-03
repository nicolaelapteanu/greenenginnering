"""Generate the favicon / app-icon set from the brand logo marks.

Brand book reference: PANTONE 382 C = #C4D82E ; PANTONE Black C = #1A1A1A.

Outputs (written to repo root):
    favicon.ico              multi-res 16/32/48 (lime mark, transparent)
    favicon-16.png           browser tab
    favicon-32.png           browser tab (retina)
    favicon-48.png           Windows
    apple-touch-icon.png     180x180, lime mark on black (opaque)
    android-chrome-192.png   Android home / PWA
    android-chrome-512.png   Android splash / PWA maskable
    safari-pinned-tab.svg    monochrome (paths pre-rasterised — fallback)
    og-image.png             1200x630 OG/Twitter share card

Run:  python3 assets/brand/_build_favicons.py
"""
from __future__ import annotations

from pathlib import Path
from PIL import Image, ImageDraw, ImageFont

ROOT = Path(__file__).resolve().parents[2]
BRAND = ROOT / "assets" / "brand"

LIME = (196, 216, 46, 255)
DARK = (26, 26, 26, 255)
WHITE = (255, 255, 255, 255)


def load(name: str) -> Image.Image:
    return Image.open(BRAND / name).convert("RGBA")


def remove_white_bg(img: Image.Image, threshold: int = 235) -> Image.Image:
    """The source PNGs ship with an opaque white background instead of true
    transparency. Chroma-key it out so the mark composites cleanly on any
    background. Pixels with min(R,G,B) > threshold get full transparency;
    anti-aliased edges (mid-grey) get proportional alpha so they blend smoothly.
    """
    img = img.convert("RGBA")
    px = img.load()
    w, h = img.size
    for y in range(h):
        for x in range(w):
            r, g, b, a = px[x, y]
            mn = min(r, g, b)
            if mn >= threshold:
                # near-white → fade to transparent based on distance from white
                fade = max(0, 255 - mn) * 12  # 0..255
                px[x, y] = (r, g, b, min(a, fade))
    return img


def trim_alpha(img: Image.Image) -> Image.Image:
    """Crop transparent margins so the mark fills its frame."""
    bbox = img.split()[-1].getbbox()
    return img.crop(bbox) if bbox else img


def fit_centered(mark: Image.Image, canvas_size: int, padding_ratio: float = 0.18) -> Image.Image:
    """Place mark centered on a transparent canvas with optional padding."""
    canvas = Image.new("RGBA", (canvas_size, canvas_size), (0, 0, 0, 0))
    pad = int(canvas_size * padding_ratio)
    inner = canvas_size - 2 * pad
    w, h = mark.size
    scale = min(inner / w, inner / h)
    new = mark.resize((max(1, int(w * scale)), max(1, int(h * scale))), Image.LANCZOS)
    x = (canvas_size - new.size[0]) // 2
    y = (canvas_size - new.size[1]) // 2
    canvas.alpha_composite(new, (x, y))
    return canvas


def with_background(rgba: Image.Image, bg) -> Image.Image:
    bg_layer = Image.new("RGBA", rgba.size, bg)
    bg_layer.alpha_composite(rgba)
    return bg_layer.convert("RGB")


def main() -> None:
    color_mark = trim_alpha(remove_white_bg(load("logo-mark-color.png")))
    # also save a clean transparent version for use elsewhere on the site
    color_mark.save(BRAND / "logo-mark-color-transparent.png", optimize=True)

    # === Browser-tab favicons (transparent, lime mark) ===
    for size in (16, 32, 48):
        out = fit_centered(color_mark, size, padding_ratio=0.08)
        out.save(ROOT / f"favicon-{size}.png", optimize=True)

    # Multi-resolution .ico (legacy IE/Edge & some chromium contexts)
    ico = fit_centered(color_mark, 64, padding_ratio=0.08)
    ico.save(
        ROOT / "favicon.ico",
        format="ICO",
        sizes=[(16, 16), (32, 32), (48, 48), (64, 64)],
    )

    # === Apple touch icon (180x180, OPAQUE — Apple requires no alpha) ===
    apple = fit_centered(color_mark, 180, padding_ratio=0.20)
    apple_opaque = with_background(apple, DARK)
    apple_opaque.save(ROOT / "apple-touch-icon.png", optimize=True)

    # === Android / PWA ===
    for size in (192, 512):
        layer = fit_centered(color_mark, size, padding_ratio=0.22)
        with_background(layer, DARK).save(ROOT / f"android-chrome-{size}.png", optimize=True)

    # === Maskable PWA icon (extra safe-zone padding so OS masks don't crop) ===
    maskable = fit_centered(color_mark, 512, padding_ratio=0.32)
    with_background(maskable, DARK).save(ROOT / "android-chrome-maskable-512.png", optimize=True)

    # === Safari pinned tab (monochrome SVG wrapper around mono PNG) ===
    # Browsers require a single-color SVG. We embed the mono mark as a PNG
    # inside an SVG; Safari's tinting still works because it only colors
    # vector paths — for a true mono SVG we'd need to vectorise the mark.
    mono = trim_alpha(remove_white_bg(load("logo-mark-mono.png")))
    mono.save(BRAND / "logo-mark-mono-transparent.png", optimize=True)
    outline = trim_alpha(remove_white_bg(load("logo-mark-outline.png")))
    outline.save(BRAND / "logo-mark-outline-transparent.png", optimize=True)

    # === OG / social-share card 1200x630 ===
    og = Image.new("RGBA", (1200, 630), DARK)
    mark_h = 340
    mw, mh = color_mark.size
    scale = mark_h / mh
    mark_resized = color_mark.resize((int(mw * scale), mark_h), Image.LANCZOS)
    og.alpha_composite(mark_resized, (90, (630 - mark_h) // 2))

    draw = ImageDraw.Draw(og)
    try:
        font_tag = ImageFont.truetype("/System/Library/Fonts/Supplemental/Arial Italic.ttf", 30)
        font_brand = ImageFont.truetype("/System/Library/Fonts/Supplemental/Arial Bold.ttf", 92)
    except OSError:
        font_tag = ImageFont.load_default()
        font_brand = ImageFont.load_default()

    text_x = 460
    draw.text((text_x, 200), "idei și soluții", fill=LIME, font=font_tag)
    draw.text((text_x, 250), "GREEN", fill=WHITE, font=font_brand)
    draw.text((text_x, 355), "ENGINEERING", fill=WHITE, font=font_brand)

    # bottom strip with website
    try:
        font_url = ImageFont.truetype("/System/Library/Fonts/Supplemental/Arial.ttf", 22)
    except OSError:
        font_url = ImageFont.load_default()
    draw.text((text_x, 480), "www.greenengineering.md  ·  Chișinău, MD", fill=(255, 255, 255, 140), font=font_url)

    og.convert("RGB").save(ROOT / "og-image.png", optimize=True, quality=92)

    print("✓ favicon-16/32/48.png, favicon.ico")
    print("✓ apple-touch-icon.png (180×180, opaque)")
    print("✓ android-chrome-192/512.png, android-chrome-maskable-512.png")
    print("✓ og-image.png (1200×630)")


if __name__ == "__main__":
    main()
