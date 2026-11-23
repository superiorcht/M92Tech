# Muhiuddin92 Technologies Portfolio

A responsive, single-page portfolio website built with PHP, HTML, CSS and vanilla JavaScript. Designed for standard PHP/MySQL cPanel hosting; the public portfolio itself does not require a database.

## Included
- Responsive one-page portfolio layout
- Navy-blue and golden visual identity
- About, services, projects, experience, skills and contact sections
- Mobile navigation
- PHP contact form using PHP `mail()`
- No database dependency

## Install on cPanel
1. Extract the ZIP file on your computer.
2. Open cPanel → File Manager → `public_html` (or your chosen domain folder).
3. Upload the contents of this project folder. Ensure `index.php` is directly inside the web root.
4. Visit your domain and test the page.

## Before publishing
Open `index.php` and update:
- `$email` with your actual business email address.
- `$whatsapp` with your WhatsApp number if you want to add a WhatsApp button later.
- `$phoneDisplay` if you want a public phone number.
- `$location` if you want a different public location.

The contact form uses PHP `mail()`. Some hosts disable or restrict it. If email delivery is not configured, use your hosting provider's SMTP service or a reputable mail plugin/library. Do not publish until you have tested delivery.

## Content accuracy
The project cards are presented as concepts/prototypes based on the software ideas discussed, not as claims of completed commercial deployments. Replace each card's description/status and add real demo/source links as projects are completed.

## Customization
- Main colors and typography: `assets/css/style.css`
- Navigation and small interactions: `assets/js/main.js`
- Page content and contact settings: `index.php`

## Requirements
- PHP 7.4+ recommended (PHP 8.x preferred)
- No SQL database required for the portfolio page
- Internet connection for Google Fonts; fallback fonts are included
