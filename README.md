# Green Engineering - Construction Landing Page

A modern, responsive landing page for Green Engineering construction company in the Republic of Moldova.

## Features

- 🎨 Beautiful, modern design with smooth animations
- 📱 Fully responsive (mobile, tablet, desktop)
- 🚀 Fast loading and optimized performance
- 📧 Working contact form with PHP backend
- ♿ Accessibility-focused
- 🔒 Security headers and best practices
- 🌐 SEO-friendly structure

## Technology Stack

- **Frontend:** HTML5, CSS3, Vanilla JavaScript
- **Backend:** PHP 8.0+
- **Server:** Apache 2.4+

## Installation

### 1. Prerequisites

- Apache server with mod_rewrite enabled
- PHP 8.0 or higher
- Mail server configured for PHP mail() function

### 2. Upload Files

Upload all files to your Apache web root directory (usually `/var/www/html/` or `public_html/`).

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

### 3. Configure Apache

Ensure the following Apache modules are enabled:

```bash
sudo a2enmod rewrite
sudo a2enmod headers
sudo a2enmod expires
sudo a2enmod deflate
sudo systemctl restart apache2
```

### 4. Update Contact Information

#### Update Email Address
Edit `contact.php` and change the email address on line 42:

```php
$to = 'your-email@greenenginnering.md'; // Your actual email address
```

#### Update Contact Details in Website
Edit `index.php` and update the following sections:

**Contact Section (around line 270):**
```html
<p>[Your Address Here]<br>Chișinău, Republic of Moldova</p>
<p>[Your Phone Number]</p>
<p>[Your Email Address]</p>
```

**Footer Section (around line 347):**
```html
<li>Chișinău, Republic of Moldova</li>
<li>[Your Phone Number]</li>
<li>[Your Email]</li>
```

### 5. File Permissions

Set appropriate permissions:

```bash
chmod 644 index.php contact.php .htaccess
chmod 644 css/style.css
chmod 644 js/script.js
chmod 755 css/ js/
```

## Configuration

### Email Configuration

The contact form uses PHP's built-in `mail()` function. Ensure your server has a working mail configuration.

**For better email delivery, consider:**
- Configuring SMTP in PHP
- Using services like SendGrid or Amazon SES
- Setting up SPF and DKIM records for your domain

### Security

The included `.htaccess` file provides:
- Security headers (X-Frame-Options, XSS-Protection, etc.)
- File protection (hiding sensitive files)
- Performance optimization (gzip, caching)

**Additional security recommendations:**
1. Enable HTTPS/SSL certificate
2. Uncomment HTTPS redirect in `.htaccess` after SSL is configured
3. Configure firewall rules
4. Regular security updates
5. Implement rate limiting on contact form

### Performance Optimization

The site is already optimized with:
- Minified CSS animations
- Efficient JavaScript (no jQuery dependency)
- Browser caching headers
- Gzip compression

**Additional improvements:**
- Use a CDN for fonts
- Implement lazy loading for images when you add real photos
- Consider using WebP format for images

## Customization

### Changing Colors

Edit `css/style.css` and modify the CSS variables at the top:

```css
:root {
    --primary-green: #2d5f3f;     /* Main green color */
    --accent-gold: #d4af37;       /* Accent gold color */
    --text-dark: #1a1a1a;         /* Dark text */
    --text-light: #666;           /* Light text */
}
```

### Adding Real Images

Replace the placeholder SVGs in `index.php` with real images:

1. Create an `images/` directory
2. Upload your images
3. Replace the placeholder divs with `<img>` tags

Example:
```html
<!-- Before -->
<div class="placeholder-image">
    <svg>...</svg>
</div>

<!-- After -->
<img src="images/project1.jpg" alt="Project Name">
```

### Adding Database Support

To save contact form submissions to a database:

1. Create a MySQL database
2. Create a table:

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

3. Uncomment and configure the `saveToDatabase()` function in `contact.php`

## Sections

The landing page includes:

1. **Navigation** - Sticky header with smooth scroll
2. **Hero Section** - Eye-catching introduction
3. **Services** - 6 core service offerings
4. **About** - Company information and statistics
5. **Projects** - Featured project showcase
6. **Contact** - Contact form and information
7. **Footer** - Quick links and site information

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Troubleshooting

### Contact form not sending emails

1. Check PHP mail configuration: `php -i | grep mail`
2. Check server mail logs: `/var/log/mail.log`
3. Verify email address in `contact.php`
4. Test with a simple PHP mail script

### CSS/JS not loading

1. Check file permissions
2. Verify file paths in `index.php`
3. Check Apache error logs: `/var/log/apache2/error.log`
4. Clear browser cache

### .htaccess causing 500 error

1. Verify Apache modules are enabled
2. Check Apache error logs
3. Comment out sections in `.htaccess` to isolate the issue

## Support

For questions or issues:
- Check Apache error logs: `/var/log/apache2/error.log`
- Check PHP error logs: `/var/log/php_errors.log`
- Verify file permissions and ownership

## License

This project is provided as-is for Green Engineering (greenenginnering.md).

## Version

Version 1.0.0 - October 2025

---

**Built with ❤️ for Green Engineering**
