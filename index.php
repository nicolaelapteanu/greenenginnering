<?php
// Green Engineering - Construction Landing Page
// Compatible with PHP 8.0+
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Green Engineering - Servicii premium de construcții în Republica Moldova. Calitate, fiabilitate și inovație în fiecare proiect.">
    <title>Green Engineering - Servicii de Construcții în Moldova</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="logo">
                    <span class="logo-green">Green</span><span class="logo-eng">Engineering</span>
                </a>
                <div class="nav-menu" id="navMenu">
                    <a href="#home" class="nav-link">Acasă</a>
                    <a href="#services" class="nav-link">Servicii</a>
                    <a href="#about" class="nav-link">Despre Noi</a>
                    <a href="#projects" class="nav-link">Proiecte</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </div>
                <button class="nav-toggle" id="navToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title fade-in">Construim Moldova de Mâine</h1>
                <p class="hero-subtitle fade-in-delay-1">Servicii premium de construcții ce combină inovația, calitatea și sustenabilitatea</p>
                <div class="hero-buttons fade-in-delay-2">
                    <a href="#contact" class="btn btn-primary">Solicită Ofertă</a>
                    <a href="#projects" class="btn btn-secondary">Vezi Proiectele</a>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Serviciile Noastre</h2>
                <p class="section-subtitle">Soluții complete de construcții pentru fiecare necesitate</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="24" width="48" height="32" stroke="currentColor" stroke-width="3" fill="none"/>
                            <path d="M8 24L32 8L56 24" stroke="currentColor" stroke-width="3" fill="none"/>
                            <rect x="24" y="40" width="16" height="16" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Construcții Rezidențiale</h3>
                    <p class="service-description">Case personalizate și complexe rezidențiale construite conform celor mai înalte standarde de calitate și confort.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="16" width="48" height="40" stroke="currentColor" stroke-width="3" fill="none"/>
                            <line x1="8" y1="28" x2="56" y2="28" stroke="currentColor" stroke-width="3"/>
                            <line x1="8" y1="40" x2="56" y2="40" stroke="currentColor" stroke-width="3"/>
                            <rect x="20" y="44" width="8" height="12" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Clădiri Comerciale</h3>
                    <p class="service-description">Spații moderne de birouri, centre comerciale și facilități comerciale proiectate pentru succes.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32" cy="32" r="20" stroke="currentColor" stroke-width="3" fill="none"/>
                            <path d="M32 12V32L44 44" stroke="currentColor" stroke-width="3"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Management de Proiect</h3>
                    <p class="service-description">Coordonare completă a proiectelor asigurând livrarea la timp și respectarea bugetului.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 48L32 56L56 48V24L32 16L8 24V48Z" stroke="currentColor" stroke-width="3" fill="none"/>
                            <path d="M32 16V56" stroke="currentColor" stroke-width="3"/>
                            <path d="M8 24L32 32L56 24" stroke="currentColor" stroke-width="3"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Renovare & Remodelare</h3>
                    <p class="service-description">Transformăm spațiile existente cu servicii experte de renovare și modernizare.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="12" y="32" width="40" height="20" stroke="currentColor" stroke-width="3" fill="none"/>
                            <path d="M20 32V20H44V32" stroke="currentColor" stroke-width="3" fill="none"/>
                            <circle cx="32" cy="42" r="4" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Dezvoltare Infrastructură</h3>
                    <p class="service-description">Drumuri, poduri și infrastructură esențială pentru dezvoltarea comunității.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 8L8 24V56H24V40H40V56H56V24L32 8Z" stroke="currentColor" stroke-width="3" fill="none"/>
                            <circle cx="32" cy="28" r="3" fill="currentColor"/>
                        </svg>
                    </div>
                    <h3 class="service-title">Soluții de Construcții Ecologice</h3>
                    <p class="service-description">Construcții durabile și ecologice cu design și materiale eficiente energetic.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2 class="section-title">Despre Green Engineering</h2>
                    <p class="about-text">
                        Cu ani de experiență în industria construcțiilor, Green Engineering a devenit un nume de încredere 
                        în Republica Moldova. Ne mândrim cu livrarea unei calități excepționale, soluții inovatoare 
                        și practici de construcție durabile.
                    </p>
                    <p class="about-text">
                        Echipa noastră de profesioniști calificați combină meșteșugul tradițional cu tehnologia modernă pentru a crea 
                        structuri care rezistă testului timpului. De la concept până la finalizare, ne angajăm să depășim 
                        așteptările dumneavoastră.
                    </p>
                    <div class="about-stats">
                        <div class="stat">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Proiecte Finalizate</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Ani de Experiență</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Satisfacția Clienților</div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="image-placeholder">
                        <svg viewBox="0 0 400 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="400" height="500" fill="#f0f4f8"/>
                            <path d="M100 200L200 100L300 200V400H100V200Z" fill="#2d5f3f" opacity="0.3"/>
                            <rect x="150" y="280" width="100" height="120" fill="#2d5f3f" opacity="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Proiecte de Referință</h2>
                <p class="section-subtitle">Demonstrăm angajamentul nostru față de excelență</p>
            </div>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <div class="placeholder-image">
                            <svg viewBox="0 0 600 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="600" height="400" fill="#e2e8f0"/>
                                <rect x="100" y="120" width="400" height="200" fill="#2d5f3f" opacity="0.3"/>
                            </svg>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Complex Rezidențial Modern</h3>
                        <p class="project-description">Clădire de apartamente de lux cu 120 de unități în Chișinău</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <div class="placeholder-image">
                            <svg viewBox="0 0 600 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="600" height="400" fill="#e2e8f0"/>
                                <rect x="50" y="80" width="500" height="240" fill="#2d5f3f" opacity="0.3"/>
                            </svg>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Centru de Birouri Comerciale</h3>
                        <p class="project-description">Spațiu modern de birouri de 15.000 mp</p>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <div class="placeholder-image">
                            <svg viewBox="0 0 600 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="600" height="400" fill="#e2e8f0"/>
                                <path d="M100 200L300 100L500 200V350H100V200Z" fill="#2d5f3f" opacity="0.3"/>
                            </svg>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Casă de Familie Durabilă</h3>
                        <p class="project-description">Vilă ecologică cu panouri solare și tehnologie verde</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contactați-ne</h2>
                <p class="section-subtitle">Să discutăm despre următorul dumneavoastră proiect</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="currentColor" stroke-width="2"/>
                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h4>Adresă</h4>
                            <p>str. Ivan Zaikin, 51, Chișinău, MD2005</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92V19.92C22 20.92 21.2 21.72 20.2 21.72C18.96 21.72 17.75 21.49 16.63 21.07C16.46 21 16.27 21.01 16.11 21.09L14 22C12.38 20.92 10.93 19.47 9.85 17.85L10.76 15.74C10.84 15.58 10.85 15.39 10.78 15.22C10.36 14.1 10.13 12.89 10.13 11.65C10.13 10.65 10.93 9.85 11.93 9.85H14.93C15.93 9.85 16.73 10.65 16.73 11.65C16.73 13.95 17.63 16.03 19.03 17.63C19.63 18.35 20.63 18.55 21.43 18.15C21.83 17.95 22.03 17.45 22.03 16.95L22 16.92Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 1L12 9" stroke="currentColor" stroke-width="2"/>
                                <path d="M8 5L12 9L16 5" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h4>Telefon</h4>
                            <p>+37360009003</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                                <path d="M3 7L12 13L21 7" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>greenenginnering@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <form id="contactForm" class="contact-form" method="post" action="contact.php">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-input" placeholder="Numele Dumneavoastră" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-input" placeholder="Email-ul Dumneavoastră" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" id="phone" class="form-input" placeholder="Numarul dumneavoastra de telefon">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-input" rows="5" placeholder="Mesajul Dumneavoastră" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Trimite Mesajul</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="footer-logo"><span class="logo-green">Green</span><span class="logo-eng">Engineering</span></h3>
                    <p class="footer-text">Construim un viitor mai bun prin construcții de calitate și practici durabile.</p>
                </div>
                <div class="footer-section">
                    <h4 class="footer-title">Link-uri Rapide</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Acasă</a></li>
                        <li><a href="#services">Servicii</a></li>
                        <li><a href="#about">Despre Noi</a></li>
                        <li><a href="#projects">Proiecte</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4 class="footer-title">Servicii</h4>
                    <ul class="footer-links">
                        <li><a href="#services">Construcții Rezidențiale</a></li>
                        <li><a href="#services">Clădiri Comerciale</a></li>
                        <li><a href="#services">Management de Proiect</a></li>
                        <li><a href="#services">Renovare</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4 class="footer-title">Informații Contact</h4>
                    <ul class="footer-links">
                        <li>str. Ivan Zaikin, 51, Chișinău, MD2005</li>
                        <li>+37360009003</li>
                        <li>greenenginnering@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Green Engineering. Toate drepturile rezervate.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
