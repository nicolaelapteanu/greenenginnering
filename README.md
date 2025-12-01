# Green Engineering - Static Website

A modern, responsive landing page for Green Engineering construction services in Moldova.

## 🌟 Features

- **Fully Responsive Design** - Works perfectly on all devices
- **Modern UI/UX** - Clean, professional design with smooth animations
- **Static HTML/CSS/JS** - No backend required, perfect for GitHub Pages
- **SEO Optimized** - Meta tags and semantic HTML structure
- **Fast Loading** - Optimized assets and minimal dependencies

## 📁 Project Structure

```
greenenginnering/
├── index.html          # Main landing page
├── css/
│   └── style.css      # All styles
├── js/
│   └── script.js      # Interactive features
└── README.md          # This file
```

## 🚀 Deploying to GitHub Pages

### Option 1: Deploy from Main Branch

1. **Push your code to GitHub:**
   ```bash
   git add .
   git commit -m "Add static website"
   git push origin main
   ```

2. **Enable GitHub Pages:**
   - Go to your repository on GitHub
   - Click on **Settings** tab
   - Scroll down to **Pages** section (in the left sidebar)
   - Under **Source**, select `main` branch
   - Select `/ (root)` as the folder
   - Click **Save**

3. **Access your site:**
   - Your site will be live at: `https://yourusername.github.io/greenenginnering/`
   - It may take a few minutes for the site to go live

### Option 2: Using GitHub Desktop

1. Open GitHub Desktop
2. Add the repository
3. Commit all changes
4. Push to origin
5. Follow steps 2-3 from Option 1

## 🛠️ Customization

### Updating Contact Information

Edit the contact section in `index.html`:

```html
<!-- Around line 270 -->
<p>str. Ivan Zaikin, 51, Chișinău, MD2005</p>
<p><a href="tel:+37360009003">+37360009003</a></p>
<p><a href="mailto:greenengineering@gmail.com">greenengineering@gmail.com</a></p>
```

### Changing Colors

Edit CSS variables in `css/style.css`:

```css
:root {
    --primary-green: #2d5f3f;
    --primary-green-light: #3a7850;
    --primary-green-dark: #1e3f2a;
    --accent-gold: #d4af37;
    /* ... */
}
```

### Adding Images

Replace the placeholder SVGs with real images:

1. Add images to an `images/` folder
2. Replace the SVG placeholders in `index.html` with:
   ```html
   <img src="images/your-image.jpg" alt="Description">
   ```

## 📱 Sections

- **Hero** - Eye-catching landing section with call-to-action
- **Services** - 6 key service offerings
- **About** - Company information and statistics
- **Contact** - Contact information and details
- **Footer** - Quick links and additional info

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## 📝 License

© 2024 Green Engineering. All rights reserved.

## 🔧 Technical Notes

- No build process required
- Pure HTML/CSS/JavaScript
- Uses Google Fonts (Poppins & Roboto)
- Intersection Observer API for scroll animations
- CSS Grid and Flexbox for layouts
- Mobile-first responsive design

## 📞 Support

For any questions or issues, contact: greenengineering@gmail.com

