<?php
include_once '../data/header.php';
?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Sync Your Digital World with <span>InfiniSync</span></h1>
            <p>Powerful web hosting, seamless music streaming, and secure archive solutions for businesses and individuals.</p>
            <div class="hero-buttons">
                <a href="#services" class="btn btn-primary">Services</a>
                <a href="#contact" class="btn btn-primary">Contact us</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Comprehensive digital solutions tailored to your needs</p>
            </div>
            <div class="services-grid">
                <!-- Web Hosting Card -->
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3>Web Hosting</h3>
                    <p>Reliable, high-performance hosting solutions with 99.9% uptime and 24/7 support.</p>
                    <a href="/web-hosting" class="service-link">Register</a>
                </div>

                <!-- Music Streaming Card 
                <div class="service-card">
                    <div class="service-icon" style="background-color: #f3e8ff;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18V5l12-2v13"></path>
                            <circle cx="6" cy="18" r="3"></circle>
                            <circle cx="18" cy="16" r="3"></circle>
                        </svg>
                    </div>
                    <h3>Music Streaming</h3>
                    <p>High-quality audio streaming platform with personalized recommendations.</p>
                    <a href="/music" class="service-link">Listen</a>
                </div>
                -->
                <!-- Archive System Card -->
                <div class="service-card">
                    <div class="service-icon" style="background-color: #dcfce7;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </div>
                    <h3>Archive System</h3>
                    <p>Secure, scalable digital archiving with advanced search and retrieval.</p>
                    <a href="/archive" class="service-link">Explore</a>
                </div>
                <!-- Minecraft Servers Card -->
                <div class="service-card">
                    <div class="service-icon" style="background-color:rgb(252, 220, 220);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l10 5v10l-10 5-10-5V7z"></path>
                            <line x1="12" y1="12" x2="12.01" y2="12"></line>
                        </svg>
                    </div>
                    <h3>Minecraft Servers</h3>
                    <p>Experience top-tier Minecraft server hosting with low latency, high performance, and 24/7 support.</p>
                    <a href="/hosting/minecraft" class="service-link">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="/data/images/servers.webp" alt="">
                </div>
                <div class="about-text">
                    <h2>About InfiniSync</h2>
                    <p>Founded in 2022, Infinisync is a technology company dedicated to providing innovative digital solutions that help businesses and individuals manage their digital presence effectively.</p>
                    <p>Our team of experts combines technical excellence with a deep understanding of our clients' needs to deliver solutions that are both powerful and easy to use.</p>
                    <p>We believe in building long-term relationships with our clients by providing exceptional service and continuously improving our offerings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Have questions about our services? Reach out to our team and we'll get back to you as soon as possible.</p>
            </div>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" required></textarea>
                </div>
                <div class="form-group submit-btn">
                    <button type="submit" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>

<?php
    include_once '../data/footer.php';
?>