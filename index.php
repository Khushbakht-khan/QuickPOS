<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>QuickPOS</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
/* ------------------------------
   COLOR PALETTE — SOLID TECH
--------------------------------*/
:root {
    --primary: #3A7AFE;
    --primary-dark: #1E5BDB;
    --secondary: #AAB4C3;
    --dark: #0F1115;
    --gray: #7E8793;
    --light-gray: #F3F4F6;
    --white: #FFFFFF;
}

/* ------------------------------
   GLOBAL STYLES
--------------------------------*/
body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background: var(--white);
    color: var(--dark);
    line-height: 1.6;
}

/* ------------------------------
   NAVBAR
--------------------------------*/
nav {
    width: 100%;
    background: var(--white);
    padding: 1.2rem 2rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    z-index: 1000;
}

nav .logo {
    font-size: 1.6rem;
    font-weight: 700;
    color: var(--primary);
}

nav ul {
    list-style: none;
    display: flex;
    gap: 25px;
    padding: 0;
    margin: 0;
}

nav a {
    text-decoration: none;
    color: var(--dark);
    font-weight: 500;
    transition: 0.3s;
}

nav a:hover {
    color: var(--primary);
}

/* ------------------------------
   HERO SECTION — Radial Tech Glow
--------------------------------*/
.hero {
    padding: 130px 2rem 100px;
    background: radial-gradient(circle at 30% 30%, #1E5BDB, #0F1115);
    color: var(--white);
    text-align: center;
    margin-top: 70px;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto 2rem;
}

/* Buttons */
.btn-primary {
    background: var(--primary);
    padding: 12px 30px;
    border-radius: 8px;
    color: var(--white);
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
    display: inline-block;
    box-shadow: 0 0 20px rgba(58,122,254,0.3);
}

.btn-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-3px) scale(1.05);
}

.btn-secondary {
    padding: 12px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    border: 2px solid var(--primary);
    color: var(--primary);
    margin-left: 10px;
    transition: 0.3s;
}

.btn-secondary:hover {
    background: var(--primary);
    color: var(--white);
}

/* ------------------------------
   FEATURES SECTION
--------------------------------*/
.features {
    padding: 80px 2rem;
    text-align: center;
}

.features-container {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    margin-top: 40px;
}

.feature-box {
    width: 280px;
    padding: 30px;
    background: var(--white);
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    transition: 0.3s;
}

.feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

.feature-icon {
    font-size: 2rem;
    background: linear-gradient(135deg, #1E5BDB, #3A7AFE);
    padding: 20px;
    border-radius: 50%;
    color: var(--white);
    margin-bottom: 20px;
    box-shadow: 0 0 25px rgba(58,122,254,0.4);
}

/* ------------------------------
   PRICING
--------------------------------*/
.pricing {
    padding: 80px 2rem;
    background: var(--light-gray);
    text-align: center;
}

.pricing-grid {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    margin-top: 40px;
}

.pricing-card {
    width: 300px;
    background: var(--white);
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    transition: 0.4s;
}

.pricing-card:hover {
    box-shadow: 0 0 25px rgba(58,122,254,0.5);
    transform: translateY(-5px);
}

.pricing-card h2 {
    color: var(--primary);
}

.pricing-card .price {
    font-size: 2.2rem;
    font-weight: 700;
    margin: 20px 0;
}

/* ------------------------------
   CONTACT SECTION
--------------------------------*/
.contact {
    padding: 80px 2rem;
    text-align: center;
}

/* ------------------------------
   FOOTER
--------------------------------*/
footer {
    background: var(--dark);
    color: var(--white);
    padding: 60px 2rem 40px;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 40px;
}

.footer-section h3 {
    margin-bottom: 10px;
}

.footer-link {
    color: var(--gray);
    text-decoration: none;
    transition: 0.3s;
}

.footer-link:hover {
    color: var(--primary);
}

.social-links a {
    color: var(--white);
    margin-right: 12px;
    font-size: 1.1rem;
    transition: 0.3s;
}

.social-links a:hover {
    color: var(--primary);
}

.footer-bottom {
    text-align: center;
    margin-top: 30px;
    font-size: 0.9rem;
    color: var(--gray);
}

</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
    <div class="logo">QuickPOS</div>
    <ul>
        <li><a href="#features">Features</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<!-- HERO -->
<section class="hero">
    <h1>Modern POS for Modern Businesses</h1>
    <p>QuickPOS gives you powerful tools to grow, manage, and scale your business—all in one platform.</p>
    <a href="#pricing" class="btn-primary">Get Started</a>
    <a href="#features" class="btn-secondary">Learn More</a>
</section>

<!-- FEATURES -->
<section id="features" class="features">
    <h1>Features</h1>

    <div class="features-container">
        <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
            <h3>Analytics</h3>
            <p>Track sales, inventory, and customer behavior in real time.</p>
        </div>

        <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-cash-register"></i></div>
            <h3>Fast Checkout</h3>
            <p>Process orders quickly with an intuitive and clean interface.</p>
        </div>

        <div class="feature-box">
            <div class="feature-icon"><i class="fas fa-box"></i></div>
            <h3>Inventory</h3>
            <p>Manage stock levels and automate restocking alerts.</p>
        </div>
    </div>
</section>

<!-- PRICING -->
<section id="pricing" class="pricing">
    <h1>Pricing</h1>

    <div class="pricing-grid">
        <div class="pricing-card">
            <h2>Starter</h2>
            <p class="price">$9/mo</p>
            <p>Basic POS features</p>
            <p>Inventory tracking</p>
            <p>Email support</p>
        </div>

        <div class="pricing-card">
            <h2>Business</h2>
            <p class="price">$29/mo</p>
            <p>Advanced analytics</p>
            <p>Multi-store support</p>
            <p>Priority assistance</p>
        </div>

        <div class="pricing-card">
            <h2>Enterprise</h2>
            <p class="price">$79/mo</p>
            <p>Unlimited everything</p>
            <p>Dedicated manager</p>
            <p>Custom integrations</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact">
    <h1>Contact Us</h1>
    <p>Email us at: support@quickpos.com</p>
</section>

<!-- FOOTER -->
<footer>
<div class="footer-container">
    <div class="footer-content">
        
        <div class="footer-section">
            <h3>QuickPOS</h3>
            <p>The modern point of sale system built for businesses that want to grow.</p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="footer-section">
            <h3>Product</h3>
            <p><a href="#features" class="footer-link">Features</a></p>
            <p><a href="#pricing" class="footer-link">Pricing</a></p>
        </div>

        <div class="footer-section">
            <h3>Company</h3>
            <p><a href="about.html" class="footer-link">About Us</a></p>
            <p><a href="#contact" class="footer-link">Contact</a></p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 QuickPOS. All rights reserved.</p>
    </div>
</div>
</footer>

</body>
</html>
