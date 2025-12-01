# Green Engineering - Pagină de Prezentare Construcții

O pagină de prezentare modernă și responsivă pentru compania de construcții Green Engineering din Republica Moldova.

## Caracteristici

- 🎨 Design frumos și modern cu animații fluide
- 📱 Complet responsiv (mobil, tabletă, desktop)
- 🚀 Încărcare rapidă și performanță optimizată
- 📧 Formular de contact funcțional cu backend PHP
- ♿ Focalizat pe accesibilitate
- 🔒 Headere de securitate și cele mai bune practici
- 🌐 Structură prietenoasă SEO

## Stack Tehnologic

- **Frontend:** HTML5, CSS3, JavaScript Vanilla
- **Backend:** PHP 8.0+
- **Server:** Apache 2.4+

## Instalare

### 1. Cerințe Preliminare

- Server Apache cu mod_rewrite activat
- PHP 8.0 sau mai nou
- Server de mail configurat pentru funcția mail() din PHP

### 2. Încărcare Fișiere

Încărcați toate fișierele în directorul root web Apache (de obicei `/var/www/html/` sau `public_html/`).

```bash
/var/www/html/
├── index.php
├── contact.php
├── .htaccess
├── css/
│   └── style.css
├── js/
│   └── script.js
└── README.md
```

### 3. Configurare Apache

Asigurați-vă că următoarele module Apache sunt activate:

```bash
sudo a2enmod rewrite
sudo a2enmod headers
sudo a2enmod expires
sudo a2enmod deflate
sudo systemctl restart apache2
```

### 4. Actualizare Informații de Contact

#### Actualizare Adresă Email
Editați `contact.php` și schimbați adresa de email la linia 51:

```php
$to = 'email-ul-dvs@greenengineering.md'; // Adresa dvs. reală de email
```

#### Actualizare Detalii de Contact pe Website
Editați `index.php` și actualizați următoarele secțiuni:

**Secțiunea Contact (în jurul liniei 252):**
```html
<p>[Adresa Dumneavoastră Aici]<br>Chișinău, Republica Moldova</p>
<p>[Numărul Dumneavoastră de Telefon]</p>
<p>[Adresa Dumneavoastră de Email]</p>
```

**Secțiunea Footer (în jurul liniei 332):**
```html
<li>Chișinău, Republica Moldova</li>
<li>[Numărul Dumneavoastră de Telefon]</li>
<li>[Email-ul Dumneavoastră]</li>
```

### 5. Permisiuni Fișiere

Setați permisiunile corespunzătoare:

```bash
chmod 644 index.php contact.php .htaccess
chmod 644 css/style.css
chmod 644 js/script.js
chmod 755 css/ js/
```

## Configurare

### Configurare Email

Formularul de contact utilizează funcția `mail()` incorporată în PHP. Asigurați-vă că serverul dvs. are o configurare de mail funcțională.

**Pentru o livrare mai bună a email-urilor, considerați:**
- Configurarea SMTP în PHP
- Utilizarea serviciilor precum SendGrid sau Amazon SES
- Configurarea înregistrărilor SPF și DKIM pentru domeniul dvs.

### Securitate

Fișierul `.htaccess` inclus oferă:
- Headere de securitate (X-Frame-Options, XSS-Protection, etc.)
- Protecție fișiere (ascunderea fișierelor sensibile)
- Optimizare performanță (gzip, caching)

**Recomandări suplimentare de securitate:**
1. Activați certificatul HTTPS/SSL
2. Decomentați redirectarea HTTPS în `.htaccess` după configurarea SSL
3. Configurați regulile firewall
4. Actualizări regulate de securitate
5. Implementați limitare de rata pentru formularul de contact

### Optimizare Performanță

Site-ul este deja optimizat cu:
- Animații CSS minificate
- JavaScript eficient (fără dependență jQuery)
- Headere de caching pentru browser
- Compresie Gzip

**Îmbunătățiri suplimentare:**
- Utilizați un CDN pentru fonturi
- Implementați încărcare lazy pentru imagini când adăugați fotografii reale
- Considerați utilizarea formatului WebP pentru imagini

## Personalizare

### Schimbarea Culorilor

Editați `css/style.css` și modificați variabilele CSS de la început:

```css
:root {
    --primary-green: #2d5f3f;     /* Culoarea principală verde */
    --accent-gold: #d4af37;       /* Culoarea accent auriu */
    --text-dark: #1a1a1a;         /* Text întunecat */
    --text-light: #666;           /* Text deschis */
}
```

### Adăugare Imagini Reale

Înlocuiți SVG-urile placeholder din `index.php` cu imagini reale:

1. Creați un director `images/`
2. Încărcați imaginile dvs.
3. Înlocuiți div-urile placeholder cu tag-uri `<img>`

Exemplu:
```html
<!-- Înainte -->
<div class="placeholder-image">
    <svg>...</svg>
</div>

<!-- După -->
<img src="images/proiect1.jpg" alt="Nume Proiect">
```

### Adăugare Suport Bază de Date

Pentru a salva trimiterile formularului de contact într-o bază de date:

1. Creați o bază de date MySQL
2. Creați o tabelă:

```sql
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    message TEXT NOT NULL,
    submitted_at DATETIME NOT NULL,
    ip_address VARCHAR(45),
    INDEX idx_submitted_at (submitted_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

3. Decomentați și configurați funcția `saveToDatabase()` în `contact.php`

## Secțiuni

Pagina de prezentare include:

1. **Navigare** - Header fix cu scroll fluid
2. **Secțiune Hero** - Introducere atrăgătoare
3. **Servicii** - 6 servicii principale oferite
4. **Despre** - Informații despre companie și statistici
5. **Proiecte** - Prezentare proiecte de referință
6. **Contact** - Formular de contact și informații
7. **Footer** - Link-uri rapide și informații site

## Suport Browsere

- Chrome (ultima versiune)
- Firefox (ultima versiune)
- Safari (ultima versiune)
- Edge (ultima versiune)
- Opera (ultima versiune)
- Browsere mobile (iOS Safari, Chrome Mobile)

## Depanare

### Formularul de contact nu trimite email-uri

1. Verificați configurarea mail PHP: `php -i | grep mail`
2. Verificați logurile mail server: `/var/log/mail.log`
3. Verificați adresa de email în `contact.php`
4. Testați cu un script PHP simplu de mail

### CSS/JS nu se încarcă

1. Verificați permisiunile fișierelor
2. Verificați căile fișierelor în `index.php`
3. Verificați logurile de eroare Apache: `/var/log/apache2/error.log`
4. Curățați cache-ul browserului

### .htaccess cauzează eroare 500

1. Verificați că modulele Apache sunt activate
2. Verificați logurile de eroare Apache
3. Comentați secțiuni în `.htaccess` pentru a izola problema

## Suport

Pentru întrebări sau probleme:
- Verificați logurile de eroare Apache: `/var/log/apache2/error.log`
- Verificați logurile de eroare PHP: `/var/log/php_errors.log`
- Verificați permisiunile și ownership-ul fișierelor

## Licență

Acest proiect este furnizat ca atare pentru Green Engineering (greenengineering.md).

## Versiune

Versiunea 1.0.0 - Octombrie 2025

---

**Construit cu ❤️ pentru Green Engineering**