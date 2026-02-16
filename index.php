<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivory County Noida - Premium Luxury Residences in Sector 115, Noida</title>
    <meta name="description" content="3 & 4 BHK Ultra-Luxury Apartments in Sector 115, Noida. Experience the perfect blend of modern architecture and serene living.">
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9MYBS12WS0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9MYBS12WS0');
</script> 

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    

  <!-- Vendor CSS Files -->
  <link href="src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="src/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="src/vendor/aos/aos.css" rel="stylesheet">
  
  <link href="src/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- Main CSS File -->
  <link href="src/css/main.css" rel="stylesheet">
   <style>
   .navbar-logo img .logo-footer{    filter: none;}
    </style>

<style>
.download-modal {
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.7);
    justify-content:center;
    align-items:center;
    z-index:9999;
}
.download-box {
    background:#fff;
    padding:20px;
    width:380px;
    border-radius:10px;
        position: relative;
}
 .download-modal .btn.btn-secondary{   margin-top: 10px;
    width: 80px;
    position: absolute;
    font-size:0;
    top: 0;
    right: 0;
}
</style>
</head>

<body class="index-page">
<div class="toast-container" id="toastContainer"></div>

    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container navbar-container">
          <a href="/" class="navbar-logo">
                <img src="src/assets/logoivorycounty.webp" alt="Ivory County Logo">
                <!-- <img src="src/assets/logonexthomes.png" alt="Ivory County next homes Logo" style="height: 40px;"> -->
            </a>

            <div class="navbar-links" id="navbarLinks">
                <a href="#overview">OVERVIEW</a>
                <a href="#highlights">HIGHLIGHTS</a>

                <a href="#gallery">GALLERY</a>
                <a href="#floorplans">FLOOR PLANS</a>
                
                <a href="#amenities">AMENITIES</a>
                <a href="#location">LOCATION</a>

                <a href="#contact" class="btn-primary">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    Enquire Now
                </a>
            </div>

            <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 12h18M3 6h18M3 18h18"></path>
                </svg>
            </button>
        </div>

        <div class="mobile-menu" id="mobileMenu">
            <a href="#overview">OVERVIEW</a>
            <a href="#highlights">HIGHLIGHTS</a>
            <a href="#amenities">AMENITIES</a>
            <a href="#floorplans">FLOOR PLANS</a>
            <a href="#gallery">GALLERY</a>
            <a href="#location">LOCATION</a>
            <a href="#contact" class="btn-primary" style="margin-top: 1rem; justify-content: center;">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
                Enquire Now
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" style="background-image: url('src/assets/2.jpeg');">
        <div class="container hero-content">
            <div>
                <span class="hero-text-badge">Premium Luxury Residences</span>
                <!-- <h1 class="hero-title">
                    <span class="primary">Elevate Your </span>
                    <span class="accent">Lifestyle</span>
                </h1> -->
              <h1 class="hero-title">
                    <span class="primary">Ivory County 115 Noida</span>
                    <span class="accent">Luxury 3, 4 &amp; 5 BHK Apartments in Sector 115</span>
                </h1>
                <p class="hero-description">
                   Ultra-Luxury 3, 4 & 5 BHK Residences in Sector 115, Noida with Modern Architecture & Peaceful Surroundings.
                </p>
                <div class="hero-buttons">
                    <a  class="btn-primary"   onclick="openDownloadModal()">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                        Download Brochure
                    </a>
                    <a href="#floorplans" class="btn-secondary">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        View Floor Plans
                    </a>
                </div>
            </div>

            <div class="hero-form">
                <h3>Register Your Interest</h3>
                <p>Fill out the form to unlock exclusive offers & floor plans.</p>

   <form action="/contact" method="post" class="php-email-form" id="contactForm">
    <!-- CSRF Token -->
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    
    <div class="row gy-4">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name*" required maxlength="50">
            <div class="invalid-feedback"></div>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email ID*" required maxlength="100">
            <div class="invalid-feedback"></div>
        </div>
        
        <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Mobile Number*" required maxlength="20">
            <div class="invalid-feedback"></div>
        </div>

       <div class="col-12 text-center">
          <div class="loading" style="display:none;">Sending...</div>
          <div class="error-message" style="display:none;color:red;"></div> <!-- This will be hidden -->
          <div class="sent-message" style="display:none;color:green;"></div> <!-- This will be hidden -->
          
          <input type="submit" class="btn-primary" style="width: 100%; justify-content: center;" value="Submit Enquiry">
      </div>
    </div>
</form>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section id="overview" class="section">
        <div class="container overview-grid">
            <div class="overview-image">
              <img src="src/assets/2-1.png" alt="Luxury Interior">
             </div>

            <div>
                <span class="section-badge">Welcome to Ivory County</span>
                <h2 class="section-title">About Ivory County Noida Sector 115</h2>
                
                <p class="section-description" style="text-align: left; margin: 0 0 2rem 0;">
                    Ivory County isn't just a residence; it's a statement of success. Located in the heart of Sector 115, Noida, this premium residential project offers an unparalleled lifestyle. Designed for those who appreciate the finer things in life, every apartment is a masterpiece of design and craftsmanship.
                </p>

                <div class="features-grid">
                    <div class="feature-item">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <h5 class="feature-title">Ultra Luxury</h5>
                        <p class="feature-description">Premium finishes and spacious layouts designed for royalty.</p>
                    </div>
                    <div class="feature-item">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <h5 class="feature-title">Green Living</h5>
                        <p class="feature-description">Acres of landscaped gardens and open green spaces.</p>
                    </div>
                    <div class="feature-item">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <h5 class="feature-title">Secure Gated</h5>
                        <p class="feature-description">3-tier security system for peace of mind.</p>
                    </div>
                    <div class="feature-item">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <h5 class="feature-title">Prime Location</h5>
                        <p class="feature-description">Sector 115, Noida - connected to major hubs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <section id="highlights" class="section bg-forest">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Why Choose Ivory County?</span>
            </div>

            <div class="highlights-grid">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <svg style="color: var(--gold); width: 26px; height: 26px;" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                    </div>
                    <h4>Gold Standard Living</h4>
                    <p>Certified green building with eco-friendly features.</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <svg style="color: var(--gold); width: 26px; height: 26px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <h4>Unmatched Connectivity</h4>
                    <p>0 km from FNG Expressway and 10 mins from Sector 78 Metro.</p>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <svg style="color: var(--gold); width: 26px; height: 26px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                            <path d="M9 22v-4h6v4"></path>
                            <path d="M8 6h.01"></path>
                            <path d="M16 6h.01"></path>
                            <path d="M12 6h.01"></path>
                            <path d="M8 10h.01"></path>
                            <path d="M16 10h.01"></path>
                            <path d="M12 10h.01"></path>
                            <path d="M8 14h.01"></path>
                            <path d="M16 14h.01"></path>
                            <path d="M12 14h.01"></path>
                        </svg>
                    </div>
                    <h4>Trusted Developer</h4>
                    <p>Legacy of delivering premium residential landmarks.</p>
                </div>
            </div>
        </div>
    </section>

 <!-- Gallery Section -->
    <section id="gallery" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Visual Tour</h2>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item gallery-item-large">
                    <img src="src/assets/8.webp" alt="Exterior">
                    <div class="gallery-overlay">
                        <span class="gallery-label">EXTERIOR</span>
                    </div>
                </div>

                  <div class="gallery-item gallery-item-large">
                    <img src="src/assets/entrance.jpg" alt="Entrance">
                    <div class="gallery-overlay">
                        <span class="gallery-label">Entrance</span>
                    </div>
                </div>
                  <div class="gallery-item  gallery-item-large">
                    <img src="src/assets/flowing-water.png" alt="Flowing Water">
                    <div class="gallery-overlay">
                        <span class="gallery-label">Flowing Water</span>
                    </div>
                </div>

                <div class="gallery-item gallery-item-large">
                    <img src="src/assets/sports-area.jpg" alt="Sports Area">
                    <div class="gallery-overlay">
                        <span class="gallery-label">SPORTS AREAS</span>
                    </div>
                </div>
                <div class="gallery-item gallery-item-large">
                    <img src="src/assets/todler-areas.jpg" alt="Toddler Areas">
                    <div class="gallery-overlay">
                        <span class="gallery-label">TODDLER AREAS</span>
                    </div>
                </div>
               
                <div class="gallery-item  gallery-item-large">
                    <img src="src/assets/Restro.jpg" alt="Restro">
                    <div class="gallery-overlay">
                        <span class="gallery-label">Restro</span>
                    </div>
                </div>
                <div class="gallery-item  gallery-item-large">
                    <img src="src/assets/energy-bar.jpg" alt="Bar">
                    <div class="gallery-overlay">
                        <span class="gallery-label">Bar</span>
                    </div>
                </div>
                  <div class="gallery-item  gallery-item-large">
                    <img src="src/assets/nature.jpeg" alt="Nature">
                    <div class="gallery-overlay">
                        <span class="gallery-label">Nature</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Floor Plans Section -->
    <section id="floorplans" class="section bg-ivory-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Floor Plans</h2>
                <p class="section-description">
                    Thoughtfully designed layouts that maximize space, light, and ventilation. Choose the perfect home for your family.
                </p>
            </div>



    <!-- Tabs -->
    <div class="floor-tabs">
        <button class="floor-tab active" data-plan="3bhk">3 BHK Premium</button>
        <button class="floor-tab" data-plan="4bhk">4 BHK Premium</button>
        <button class="floor-tab" data-plan="4bhk-lux">4 BHK Luxury</button>
        <button class="floor-tab" data-plan="5bhk">5 BHK Luxury</button>
    </div>

    <!-- Dynamic Layout Container -->
    <div id="floorPlanContainer" class="floor-plan-grid"></div>

        </div>
    </section>


       <!-- Amenities Section -->
    <section id="amenities" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">World-Class Amenities</h2>
                <p class="section-description">
                    Experience a resort-like lifestyle with amenities designed to pamper your senses and rejuvenate your soul.
                </p>
            </div>

            <div class="amenities-grid">

                <div class="amenity-card">
                    <img src="src/assets/flowing-water.png" alt="Landscaped Gardens">
                    <div class="amenity-overlay"></div>
                    <div class="amenity-content">
                        <h3>Landscaped Gardens</h3>
                        <p>Thematic gardens and jogging tracks for a healthy lifestyle.</p>
                    </div>
                </div>
                <div class="amenity-card">
                    <img src="src/assets/play-area.jpg" alt="Sports Area">
                    <div class="amenity-overlay"></div>
                    <div class="amenity-content">
                        <h3>Sports Area</h3>
                        <p>Well-equipped sports facilities for all age groups.</p>
                    </div>
                </div>
                <div class="amenity-card">
                    <img src="src/assets/Restro.jpg" alt="Restro & Bar">
                    <div class="amenity-overlay"></div>
                    <div class="amenity-content">
                        <h3>Restro & Bar</h3>
                        <p>50,000 sq.ft. clubhouse with world-class recreational facilities.</p>
                    </div>
                </div>
                <div class="amenity-card">
                    <img src="src/assets/amenity-gym.jpg" alt="State-of-the-art Gym">
                    <div class="amenity-overlay"></div>
                    <div class="amenity-content">
                        <h3>State-of-the-art Gym</h3>
                        <p>Fully equipped gymnasium with personal trainers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Location Section -->
    <section id="location" class="section bg-ivory-dark">
        <div class="container location-grid">
            <div class="location-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d219.00647389565918!2d77.40686565938574!3d28.566652135150594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1771161596919!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   </div>

            <div>
                <span class="section-badge">Strategic Location</span>
                <h2 class="section-title">Perfectly Connected</h2>
                <p class="section-description" style="text-align: left; margin: 0 0 2rem 0;">
                    Located in Sector 115, Noida, Ivory County offers seamless connectivity to Delhi, Greater Noida, and key commercial hubs.
                </p>

                <div class="location-features">
                    <div class="location-feature">
                        <div class="location-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="4" y="6" width="16" height="12" rx="2" ry="2"></rect>
                                <path d="M4 11h16"></path>
                                <circle cx="9" cy="16" r="1"></circle>
                                <circle cx="15" cy="16" r="1"></circle>
                                <path d="M9 6V4"></path>
                                <path d="M15 6V4"></path>
                                <path d="M7 19l-2 2"></path>
                                <path d="M17 19l2 2"></path>
                            </svg>
                        </div>
                        <span style="font-weight: 500; font-size: 0.875rem;">10 Mins from Metro Station</span>
                    </div>
                    <div class="location-feature">
                        <div class="location-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path>
                                <path d="M7 19v-1a2 2 0 0 1 2-2h.5M12 19v-3"></path>
                                <circle cx="17" cy="8" r="1"></circle>
                            </svg>
                        </div>
                        <span style="font-weight: 500; font-size: 0.875rem;">0 KM from FNG Expressway</span>
                    </div>
                    <div class="location-feature">
                        <div class="location-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <path d="M9 6h.01M15 6h.01"></path>
                            </svg>
                        </div>
                        <span style="font-weight: 500; font-size: 0.875rem;">Near Reputed Schools</span>
                    </div>
                    <div class="location-feature">
                        <div class="location-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <span style="font-weight: 500; font-size: 0.875rem;">Proximity to Top Hospitals</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section bg-forest">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: var(--ivory);">Get In Touch</h2>
                <p class="section-description" style="color: rgba(249, 247, 241, 0.7);">
                    Ready to experience luxury? Schedule a private site visit or request a callback from our sales team.
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <h4>Site Address</h4>
                          <p>Next Homes, Shop No. 03, Opp. Ivory County Marketing Office,<br> Sector 115, Noida, Uttar Pradesh 201301</p>
                         </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                          <a href="tel:+919355000667" class="contact-link" style="text-decoration: none; color: inherit;">
                            <h4>Phone</h4>
                            <p>+91-9355-000-667</p>
                       </a>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <a href="mailto:deepak.sxn1@gmail.com" class="contact-link" style="text-decoration: none; color: inherit;">
                            <h4>Email</h4>
                            <p>deepak.sxn1@gmail.com</p>
                        </a>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4>Office Hours</h4>
                            <p>10:00 AM - 7:00 PM (All Days Open)</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <h3>Schedule A Site Visit</h3>
                            <form action="/contact" method="post" class="php-email-form" id="contactForm">
                                <!-- CSRF Token -->
                                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                
                                <div class="row gy-4">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name*" required maxlength="50">
                                        <div class="invalid-feedback"></div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email ID*" required maxlength="100">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="tel" name="phone" class="form-control" placeholder="Mobile Number*" required maxlength="20">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea name="message" rows="3" class="form-control" placeholder="Message" maxlength="1000"></textarea>
                                        <div class="invalid-feedback"></div>
                                        <small class="form-text text-muted">Maximum 1000 characters</small>
                                    </div>

                                <div class="col-12 text-center">
                                    <div class="loading" style="display:none;">Sending...</div>
                                    <div class="error-message" style="display:none;color:red;"></div> <!-- This will be hidden -->
                                    <div class="sent-message" style="display:none;color:green;"></div> <!-- This will be hidden -->
                                    
                                    <input type="submit" class="btn-primary" style="width: 100%; justify-content: center;" value="Submit Enquiry">
                                </div>
                                </div>
                            </form>
                 
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-content">
           <div class="navbar-logo">
                <span class="logo-primary">IVORY</span>
                <span class="logo-secondary">COUNTY</span>
            </div>

            <div class="footer-links">
                <a href="#overview">Overview</a>
                <a href="#amenities">Amenities</a>
                <a href="#floorplans">Floor Plans</a>
                <a href="#gallery">Gallery</a>
                <a href="#contact">Contact</a>
            </div>

            <p class="footer-copyright">
                © 2026 Next Homes. All rights reserved.
            </p>
        </div>
    </footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
    <div id="preloader"></div>
  <!-- Main JS File -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="src/js/main.js"></script>


<!-- DOWNLOAD MODAL -->
<div class="download-modal" id="downloadModal">
    <div class="download-box">
         <h5 class="mb-3">Download Brochure</h5>
               <form action="/contact" method="post" class="php-email-form" id="contactForm">
                    <!-- CSRF Token -->
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                    
                    <div class="row gy-4">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name*" required maxlength="50">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email ID*" required maxlength="100">
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" placeholder="Mobile Number*" required maxlength="20">
                            <div class="invalid-feedback"></div>
                        </div>

                    <div class="col-12 text-center">
                        <div class="loading" style="display:none;">Sending...</div>
                        <div class="error-message" style="display:none;color:red;"></div> <!-- This will be hidden -->
                        <div class="sent-message" style="display:none;color:green;"></div> <!-- This will be hidden -->
                        
                        <input type="submit" class="btn-primary" style="width: 100%; justify-content: center;" value="Download Brochure">
                    </div>
                    </div>
                </form>

        <button onclick="closeDownloadModal()" 
                type="button" 
                class="btn-close position-absolute top-0 end-0 m-3"
                aria-label="Close">
        </button>
    </div>
</div>


<script>
function openDownloadModal() {
    document.getElementById("downloadModal").style.display = "flex";
}
function closeDownloadModal() {
    document.getElementById("downloadModal").style.display = "none";
}
</script>

   <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });

const planData = {
    '3bhk': [
        {
            title: '3 BHK + 3 TOILET + 4 Balcony',
            superArea: '2034 Sq. Ft.',
            carpetArea: '1255 Sq. Ft.',
            bedrooms: '3',
            bathrooms: '3',
            image: 'src/assets/plan-a-3bhk.jpeg',
            imageClass: 'small-plan'
        },
        {
            title: '3 BHK + Utility Room with Toilet',
            superArea: '2304 Sq. Ft.',
            carpetArea: '1396 Sq. Ft.',
            bedrooms: '3',
            bathrooms: '3',
            image: 'src/assets/plan-b-3bhk.jpeg',
            imageClass: 'small-plan'
        }
    ],

    '4bhk': [
        {
            title: '4 BHK + 6 Balcony + Utility',
            superArea: '2727 Sq. Ft.',
            carpetArea: '1636 Sq. Ft.',
            bedrooms: '4',
            bathrooms: '4',
            image: 'src/assets/plan-c-4bhk.jpeg',
            imageClass: 'small-plan'
        },
        {
            title: '4 BHK + 4 Balcony + Utility',
            superArea: '3195 Sq. Ft.',
            carpetArea: '1950 Sq. Ft.',
            bedrooms: '4',
            bathrooms: '4',
            image: 'src/assets/plan-d-4bhk.jpeg',
            imageClass: 'small-plan'
        }
    ],

    '4bhk-lux': [
        {
            title: '4 BHK Luxury + 5 Toilet',
            superArea: '3987 Sq. Ft.',
            carpetArea: '2249 Sq. Ft.',
            bedrooms: '4',
            bathrooms: '5',
            image: 'src/assets/plan-e-4bhk.png',
            imageClass: 'large-plan'
        },
        {
            title: '4 BHK Luxury + 2 Utility Rooms',
            superArea: '4707 Sq. Ft.',
            carpetArea: '2801 Sq. Ft.',
            bedrooms: '4',
            bathrooms: '5',
            image: 'src/assets/plan-f-4bhk.png',
            imageClass: 'large-plan'
        }
    ],

    '5bhk': [
        {
            title: '5 BHK + 6 TOILET + 3 Utility',
            superArea: '6939 Sq. Ft.',
            carpetArea: '4085 Sq. Ft.',
            bedrooms: '5',
            bathrooms: '6',
            image: 'src/assets/plan-g-5bhk.png',
            imageClass: 'large-plan'
        }
    ]
};

const floorTabs = document.querySelectorAll('.floor-tab');
const container = document.getElementById('floorPlanContainer');

function renderPlans(planKey) {
    const layouts = planData[planKey];
    container.innerHTML = '';

    layouts.forEach(layout => {
        const layoutHTML = `
            <div class="floor-plan-details">
                 <h3 id="planTitle">${layout.title}</h3>
                <div class="plan-specs">
                            <div class="plan-spec">
                                <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                                <div>  <p class="spec-label">Super Area:</p> <p class="spec-value" id="superArea">${layout.superArea}</p></div>
                            </div>

                        <div class="plan-spec">
                                        <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                        <div> <p class="spec-label">Carpet Area:</p> <p class="spec-value">${layout.carpetArea}</p>  </div>
                            </div>
                        <div class="plan-spec">
                                        <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        </svg>
                                        <div> <p class="spec-label">Bedrooms:</p> <p class="spec-value">${layout.bedrooms}</p></div>
                            </div>           
                            <div class="plan-spec">
                                        <svg style="color: var(--gold); width: 20px; height: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        </svg>
                                        <div> <p class="spec-label">Bathrooms:</p> <p class="spec-value">${layout.bathrooms}</p></div>
                             </div>
                    </div>

                     <button class="btn-primary mb-2"  onclick="openDownloadModal()">
                       <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    Download Brochure
                    </button>
                        <button class="btn-primary mb-2"  onclick="openDownloadModal()">
                       <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    Price Details
                    </button>
            </div>  
                <div class="floor-plan-visual">
                    <img src="${layout.image}" alt="${layout.title}"  class="${layout.imageClass ? layout.imageClass : ''}">
                </div>  
        `;
        container.innerHTML += layoutHTML;
    });
}

floorTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        floorTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        renderPlans(tab.dataset.plan);
    });
});

// Load default tab on page load
renderPlans('3bhk');



        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>






<script>
// Toast notification function
function showToast(message, type = 'success', duration = 4000) {
    const toastContainer = document.getElementById('toastContainer');
    
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    
    const icon = type === 'success' ? '✓' : '✕';
    toast.innerHTML = `
        <span class="toast-icon">${icon}</span>
        <span class="toast-message">${message}</span>
        <button class="close-btn" onclick="closeToast(this)">&times;</button>
    `;
    
    toastContainer.appendChild(toast);
    
    // Show toast with animation
    setTimeout(() => {
        toast.classList.add('show');
    }, 100);
    
    // Auto remove toast
    setTimeout(() => {
        closeToast(toast.querySelector('.close-btn'));
    }, duration);
}

// Close toast function
function closeToast(closeBtn) {
    const toast = closeBtn.parentElement;
    toast.classList.remove('show');
    setTimeout(() => {
        toast.remove();
    }, 300);
}

// Handle URL parameters for feedback and show toast
window.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    const msg = urlParams.get('msg');
    
    // Hide the existing error/success message divs
    const errorMessage = document.querySelector('.error-message');
    const sentMessage = document.querySelector('.sent-message');
    if (errorMessage) errorMessage.style.display = 'none';
    if (sentMessage) sentMessage.style.display = 'none';
    
    if (status === 'success') {
        showToast('Your message has been sent successfully. Thank you!', 'success', 3000);
        
        // Refresh page after toast disappears
        setTimeout(() => {
            // Clear URL parameters and refresh
            window.history.replaceState({}, document.title, window.location.pathname);
            window.location.reload();
        }, 3500);
        
    } else if (status === 'error') {
        let errorMsg = 'An error occurred. Please try again.';
        
        switch(msg) {
            case 'rate_limit':
                errorMsg = 'Please wait a minute before submitting another message.';
                break;
            case 'spam_detected':
                errorMsg = 'Your message was flagged as spam. Please try again.';
                break;
            case 'security_error':
                errorMsg = 'Security error. Please refresh the page and try again.';
                break;
            case 'mail_error':
                errorMsg = 'Email service temporarily unavailable. Please try again later.';
                break;
            default:
                errorMsg = msg ? decodeURIComponent(msg) : 'An error occurred. Please try again.';
        }
        
        showToast(errorMsg, 'error', 5000);
        
        // Clear URL parameters after showing error
        setTimeout(() => {
            window.history.replaceState({}, document.title, window.location.pathname);
        }, 1000);
    }
});

// Client-side form validation
document.getElementById('contactForm').addEventListener('submit', function(e) {
    const form = this;
    const loading = form.querySelector('.loading');
    
    // Show loading
    if (loading) loading.style.display = 'block';
    
    // Basic client-side validation
    const name = form.querySelector('[name="name"]').value.trim();
    const email = form.querySelector('[name="email"]').value.trim();
    const phone = form.querySelector('[name="phone"]').value.trim();
    
    if (!name || !email || !phone) {
        e.preventDefault();
        if (loading) loading.style.display = 'none';
        showToast('Please fill in all required fields.', 'error');
        return;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        e.preventDefault();
        if (loading) loading.style.display = 'none';
        showToast('Please enter a valid email address.', 'error');
        return;
    }
    
    // If validation passes, show submitting toast
    showToast('Submitting your message...', 'success', 2000);
});
</script>
</body>
</html>