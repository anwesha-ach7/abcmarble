<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiles - ABC Sanitation and Marble</title>

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
 <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
 <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css">
 <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4efe4;
            color: #1f1b19;
            overflow-x: hidden;
            /* No padding-top — inner-navbar is NOT fixed */
        }
        .nav-left a, .nav-right a{
            font-family: 'Times New Roman', Times, serif;
        }

        .carousel-outer-wrapper {
            width: 100%;
            padding: 0 50px;
            margin: 0 auto 60px;
            position: relative;
            box-sizing: border-box;
            top: 30px;
        }

        .carousel-viewport {
            width: 100%;
            overflow: hidden;
            border-radius: 18px;
        }

        .carousel-track {
            display: flex;
            gap: 24px;
            transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
            user-select: none;
        }

        /* Large Cards starting left and going up to right */
        .carousel-card {
            flex: 0 0 calc((100% - 48px) / 3);
            min-width: calc((100% - 48px) / 3);
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            box-shadow: 0 6px 22px rgba(0, 0, 0, 0.07);
            border: 1px solid #e7e2d7;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            cursor: pointer;
        }

        .carousel-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
        }

        .card-image-box {
            position: relative;
            width: 100%;
            height: 310px;
            background-color: #dfd9cd;
            overflow: hidden;
        }

        .card-image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.45s ease;
        }

        .carousel-card:hover .card-image-box img {
            transform: scale(1.08);
        }

        .card-arrow-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(4px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.14);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #302b28;
            font-size: 14px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            z-index: 2;
        }

        .carousel-card:hover .card-arrow-badge {
            transform: scale(1.15) rotate(45deg);
            background: #0d203b;
            color: #ffffff;
        }

        .card-title-footer {
            padding: 18px 22px;
            background: #ffffff;
            display: flex;
            align-items: center;
        }

        .card-title-footer span {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 500;
            color: #1f1b19;
            letter-spacing: 0.2px;
        }

        /* Carousel Navigation Buttons at edges */
        .carousel-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #ffffff;
            border: 1px solid #c9c3b8;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
            color: #302b28;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.25s ease;
            outline: none;
        }

        .carousel-nav-btn:hover {
            background: #0d203b;
            color: #ffffff;
            border-color: #0d203b;
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-nav-btn.prev {
            left: 25px;
        }

        .carousel-nav-btn.next {
            right: 25px;
        }

        /* ==================== PRETTY INQUIRY BANNER SECTION ==================== */
        .inquiry-banner-section {
            width: 100%;
            min-height: 250px;
            background-image: url('/images/pretty-bg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 45px 25px;
            margin: 0 0 65px 0;
            box-sizing: border-box;
        }

        .inquiry-card {
            background: #ffffff;
            padding: 32px 48px;
            max-width: 540px;
            width: 100%;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .inquiry-card p {
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            line-height: 1.7;
            color: #1f1b19;
            text-transform: uppercase;
            margin: 0;
        }

        .inquiry-btn {
            display: inline-block;
            padding: 9px 34px;
            border: 1px solid #1f1b19;
            background: transparent;
            color: #1f1b19;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .inquiry-btn:hover {
            background-color: #1f1b19;
            color: #ffffff;
        }

        /* ==================== EXPLORE PRODUCT RANGE BY SPACES ==================== */
        .spaces-section {
            width: 100%;
            padding: 0 50px;
            margin: 0 auto 90px;
            box-sizing: border-box;
        }

        .spaces-header-box {
            width: 100%;
            margin-bottom: 25px;
        }

        .spaces-header-box h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 44px;
            font-weight: 500;
            color: #9b4037;
            line-height: 1.15;
            margin-bottom: 12px;
        }

        .spaces-header-box p {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            line-height: 1.6;
            color: #403a37;
            font-weight: 400;
            max-width: 950px;
        }

        /* 2-Column Spaces Layout */
        .spaces-content-layout {
            width: 100%;
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            gap: 40px;
            align-items: start;
        }

        /* Left Main Featured Image (Fixed dimensions, no shifting or jumping) */
        .spaces-left-showcase {
            width: 100%;
            height: 520px;
            border-radius: 20px;
            overflow: hidden;
            background-color: #e1ddd3;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 95px;
        }

        .spaces-left-showcase img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Right Column with Tabs directly on top of Accordion List */
        .spaces-right-column {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        /* Tabs directly above the Accordion items */
        .spaces-tabs {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 6px;
        }

        .space-tab-btn {
            padding: 9px 20px;
            border-radius: 40px;
            font-family: 'Montserrat', sans-serif;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.3px;
            border: 1px solid #d5cec2;
            background-color: #ffffff;
            color: #302b28;
            cursor: pointer;
            transition: all 0.25s ease;
            outline: none;
            white-space: nowrap;
        }

        .space-tab-btn.active {
            background-color: #0d203b;
            color: #ffffff;
            border-color: #0d203b;
            box-shadow: 0 4px 14px rgba(13, 32, 59, 0.22);
        }

        .space-tab-btn:hover:not(.active) {
            background-color: #eee7dc;
            border-color: #8c8175;
        }

        /* Accordion List */
        .spaces-accordion-list {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .accordion-item {
            width: 100%;
            border-bottom: 1.5px solid #8c8175;
            padding-bottom: 14px;
            box-sizing: border-box;
        }

        .accordion-header {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            cursor: pointer;
            user-select: none;
        }

        .accordion-header-title {
            display: flex;
            align-items: baseline;
            gap: 14px;
        }

        .acc-number {
            font-family: 'Montserrat', sans-serif;
            font-size: 26px;
            font-weight: 300;
            color: #8c8175;
        }

        .acc-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            font-weight: 500;
            color: #1f1b19;
        }

        .acc-toggle-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #ffffff;
            border: 1px solid #dcd5c9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8c8175;
            font-size: 14px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
        }

        .accordion-item.active .acc-toggle-icon {
            transform: rotate(90deg);
            background-color: #0d203b;
            color: #ffffff;
            border-color: #0d203b;
        }

        /* Accordion Collapsible Body with Smooth Height Animation */
        .accordion-body-wrapper {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, opacity 0.25s ease;
            opacity: 0;
        }

        .accordion-item.active .accordion-body-wrapper {
            max-height: 280px;
            opacity: 1;
        }

        .accordion-body-content {
            display: flex;
            gap: 22px;
            align-items: center;
            padding: 10px 0 10px 42px;
            box-sizing: border-box;
        }

        .acc-text-col {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 16px;
            align-items: flex-start;
        }

        .acc-text-col p {
            font-family: 'Montserrat', sans-serif;
            font-size: 13.5px;
            line-height: 1.6;
            color: #403a37;
        }

        .acc-cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 24px;
            background: #ffffff;
            color: #1f1b19;
            border: 1.5px solid #d5cec2;
            border-radius: 6px;
            font-family: 'Montserrat', sans-serif;
            font-size: 13.5px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.25s ease;
        }

        .acc-cta-btn:hover {
            background-color: #0d203b;
            color: #ffffff;
            border-color: #0d203b;
            box-shadow: 0 6px 14px rgba(13, 32, 59, 0.2);
            transform: translateY(-2px);
        }

        .acc-thumb-col {
            width: 140px;
            height: 100px;
            flex-shrink: 0;
            border-radius: 12px;
            overflow: hidden;
            background-color: #dfd9cd;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .acc-thumb-col img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .acc-thumb-col:hover img {
            transform: scale(1.08);
        }
        .tiles-landing-hero {
            position: relative;
            width: 100%;
            height: 650px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .tiles-landing-image {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .tiles-landing-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    90deg,
                    rgba(20, 15, 10, 0.58) 0%,
                    rgba(20, 15, 10, 0.25) 45%,
                    rgba(20, 15, 10, 0.08) 100%
                );
        }

        .tiles-landing-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 1200px;
            padding: 0 70px;
            box-sizing: border-box;
            color: #ffffff;
            text-align: left;
        }

        .tiles-eyebrow {
            margin: 0 0 15px;
            font-family: "Montserrat", sans-serif;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        .tiles-landing-content h1 {
            margin: 0;
            font-family: "Cormorant Garamond", serif;
            font-size: 100px;
            font-weight: 500;
            line-height: 0.9;
            letter-spacing: -2px;
        }

        .tiles-hero-description {
            margin: 22px 0 30px;
            font-family: "Cormorant Garamond", serif;
            font-size: 27px;
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .tiles-hero-button {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            padding: 13px 23px;
            border: 1px solid rgba(255,255,255,0.8);
            color: #ffffff;
            text-decoration: none;
            font-family: "Montserrat", sans-serif;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .tiles-hero-button span {
            font-size: 18px;
            line-height: 1;
        }

        .tiles-hero-button:hover {
            background: #ffffff;
            color: #1c1a18;
        }

        @media (max-width: 768px) {

            .tiles-landing-hero {
                height: 560px;
            }

            .tiles-landing-content {
                padding: 0 30px;
            }

            .tiles-landing-content h1 {
                font-size: 72px;
            }

            .tiles-hero-description {
                font-size: 23px;
            }

        }

        @media (max-width: 480px) {

            .tiles-landing-hero {
                height: 500px;
            }

            .tiles-landing-content {
                padding: 0 22px;
            }

            .tiles-eyebrow {
                font-size: 10px;
                letter-spacing: 3px;
            }

            .tiles-landing-content h1 {
                font-size: 58px;
            }

            .tiles-hero-description {
                font-size: 20px;
                margin: 15px 0 25px;
            }

        }

        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 1024px) {
            body, .hero-banner-section, .carousel-outer-wrapper, .spaces-section {
                padding-left: 25px;
                padding-right: 25px;
            }
            .carousel-card {
                flex: 0 0 calc((100% - 20px) / 2);
                min-width: calc((100% - 20px) / 2);
            }
            .card-image-box {
                height: 260px;
            }
            .spaces-content-layout {
                grid-template-columns: 1fr;
            }
            .spaces-left-showcase {
                position: static;
                height: 360px;
            }
        }

        @media (max-width: 768px) {
            .page-title-section h1 {
                font-size: 42px;
            }
            .carousel-card {
                flex: 0 0 100%;
                min-width: 100%;
            }
            .card-image-box {
                height: 220px;
            }
            .spaces-header-box h2 {
                font-size: 32px;
            }
            .accordion-body-content {
                flex-direction: column-reverse;
                align-items: flex-start;
                padding-left: 0;
            }
            .acc-thumb-col {
                width: 100%;
                height: 150px;
            }
            .acc-text-col,
            .acc-cta-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- ==================== INNER PAGE NAVBAR (from navbar.css .inner-navbar) ==================== -->
    <nav class="inner-navbar">
        <div class="nav-left">
            <a href="/tiles" style="font-weight: 600;">Tiles</a>
            <a href="/bathware">Bathware</a>
            <a href="/building-solutions">Building Solutions</a>
        </div>

        <a href="/">
            <img src="/images/somany-nobg.png" class="inner-nav-logo" alt="Somany">
        </a>

        <div class="nav-right">
            <a href="#" class="catalogues-link">Catalogues</a>
            <span class="search-icon"><i class="fi fi-rr-search"></i></span>
            <span class="login-icon"><i class="fi fi-sr-user"></i></span>
            <div class="hamburger" id="hamburger"><i class="fi fi-rr-menu-burger"></i></div>
        </div>

        <div class="mobile-menu" id="mobileMenu">
            <a href="/tiles">Tiles</a>
            <a href="/bathware">Bathware</a>
            <a href="/building-solutions">Building Solutions</a>
            <a href="#">Catalogues</a>
        </div>
    </nav>
<section class="tiles-landing-hero">

    <img
        src="/images/tiles-hero.png"
        alt="Luxury living room with tiles"
        class="tiles-landing-image"
    >

    <div class="tiles-landing-overlay"></div>

    <div class="tiles-landing-content">

        <p class="tiles-eyebrow">SOMANY</p>

        <h1>Tiles</h1>

        <p class="tiles-hero-description">
            Surfaces that transform spaces.
        </p>

        <a href="#tile-categories" class="tiles-hero-button">
            Explore Collections
            <span>↗</span>
        </a>

    </div>

</section>
    <section class="carousel-outer-wrapper">
        <button class="carousel-nav-btn prev" id="carouselPrev" aria-label="Previous Tile">
            <i class="fi fi-rr-angle-left"></i>
        </button>
        <button class="carousel-nav-btn next" id="carouselNext" aria-label="Next Tile">
            <i class="fi fi-rr-angle-right"></i>
        </button>

        <div class="carousel-viewport" id="carouselViewport">
            <div class="carousel-track" id="carouselTrack">
                <!-- Card 1: Wall Tiles -->
                <a href="/tile-products?category=wall" class="carousel-card">
                    <div class="card-image-box">
                        <img src="/images/b1.jpeg" alt="Wall Tiles">
                        <div class="card-arrow-badge">
                            <i class="fi fi-rr-arrow-up-right"></i>
                        </div>
                    </div>
                    <div class="card-title-footer">
                        <span>Wall Tiles</span>
                    </div>
                </a>

                <!-- Card 2: Floor Tiles -->
                <a href="/tile-products?category=floor" class="carousel-card">
                    <div class="card-image-box">
                        <img src="/images/b2.jpeg" alt="Floor Tiles">
                        <div class="card-arrow-badge">
                            <i class="fi fi-rr-arrow-up-right"></i>
                        </div>
                    </div>
                    <div class="card-title-footer">
                        <span>Floor Tiles</span>
                    </div>
                </a>

                <!-- Card 3: Countertops -->
                <a href="/tile-products?category=countertop" class="carousel-card">
                    <div class="card-image-box">
                        <img src="/images/b3.jpeg" alt="Countertops">
                        <div class="card-arrow-badge">
                            <i class="fi fi-rr-arrow-up-right"></i>
                        </div>
                    </div>
                    <div class="card-title-footer">
                        <span>Countertops</span>
                    </div>
                </a>

                <!-- Card 4: Outdoors -->
                <a href="/tile-products?category=outdoors" class="carousel-card">
                    <div class="card-image-box">
                        <img src="/images/b4.jpeg" alt="Outdoors">
                        <div class="card-arrow-badge">
                            <i class="fi fi-rr-arrow-up-right"></i>
                        </div>
                    </div>
                    <div class="card-title-footer">
                        <span>Outdoors</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== PRETTY INQUIRY BANNER SECTION ==================== -->
    <section class="inquiry-banner-section">
        <div class="inquiry-card">
            <p>Kindly inquire about our availability and arrange a private tour</p>
            <a href="/tile-products" class="inquiry-btn">Inquire</a>
        </div>
    </section>

    <!-- ==================== EXPLORE BY SPACES SECTION ==================== -->
    <section class="spaces-section">
        <div class="spaces-header-box">
            <h2>Explore Product Range by Spaces</h2>
            <p>From functional surfaces to design-led finishes, Somany's tile ranges are curated to suit every application, size, and style, making it easy to find the right tile for every space.</p>
        </div>

        <div class="spaces-content-layout">
            <!-- Left Large Showcase Image -->
            <div class="spaces-left-showcase">
                <img id="spacesMainImage" src="/images/b5.jpeg" alt="Explore Spaces Featured Image">
            </div>

            <!-- Right Column with Tabs directly on top of Accordion List -->
            <div class="spaces-right-column">
                <div class="spaces-tabs">
                    <button class="space-tab-btn active" data-tab="application">Explore By Application</button>
                    <button class="space-tab-btn" data-tab="size">Explore By Size</button>
                    <button class="space-tab-btn" data-tab="look">Explore By Look</button>
                </div>

                <div class="spaces-accordion-list" id="accordionContainer">
                    <!-- Dynamically populated via JS -->
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-top">
            <div class="footer-brand">
                <img src="/images/somany-footer.png" alt="ABC Sanitation and Marble" class="footer-logo">
                <p class="footer-tagline">Quality tiles, marble & building solutions<br>rooted in Butwal, built for Nepal.</p>
            </div>

            <div class="footer-links">
                <h4>Explore</h4>
                <a href="/tiles">Tiles</a>
                <a href="/bathware">Bathware</a>
                <a href="/building-solutions">Building Solutions</a>
            </div>

            <div class="footer-links">
                <h4>Company</h4>
                <a href="#">About Us</a>
                <a href="#">Catalogues</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 ABC Sanitation and Marble. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- ==================== SCRIPTS ==================== -->
    <script>
        /* ==================== INFINITE 3-ACROSS CAROUSEL ==================== */
        const track = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('carouselPrev');
        const nextBtn = document.getElementById('carouselNext');
        const viewport = document.getElementById('carouselViewport');

        let currentIndex = 0;
        const totalCards = 4;
        let autoPlayTimer = null;

        function getVisibleCards() {
            if (window.innerWidth <= 768) return 1;
            if (window.innerWidth <= 1024) return 2;
            return 3;
        }

        function updateCarouselPosition() {
            const visibleCards = getVisibleCards();
            const maxIndex = totalCards - visibleCards;
            
            if (currentIndex > maxIndex) {
                currentIndex = 0;
            } else if (currentIndex < 0) {
                currentIndex = maxIndex;
            }

            const cardWidthPercent = 100 / visibleCards;
            track.style.transform = `translateX(-${currentIndex * cardWidthPercent}%)`;
        }

        function nextSlide() {
            const visibleCards = getVisibleCards();
            const maxIndex = totalCards - visibleCards;
            if (currentIndex >= maxIndex) {
                currentIndex = 0;
            } else {
                currentIndex++;
            }
            updateCarouselPosition();
        }

        function prevSlide() {
            const visibleCards = getVisibleCards();
            const maxIndex = totalCards - visibleCards;
            if (currentIndex <= 0) {
                currentIndex = maxIndex;
            } else {
                currentIndex--;
            }
            updateCarouselPosition();
        }

        function startAutoPlay() {
            stopAutoPlay();
            autoPlayTimer = setInterval(() => {
                nextSlide();
            }, 2500);
        }

        function stopAutoPlay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                startAutoPlay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                startAutoPlay();
            });
        }

        if (viewport) {
            viewport.addEventListener('mouseenter', stopAutoPlay);
            viewport.addEventListener('mouseleave', startAutoPlay);
            viewport.addEventListener('touchstart', stopAutoPlay, { passive: true });
            viewport.addEventListener('touchend', startAutoPlay, { passive: true });
        }

        window.addEventListener('resize', updateCarouselPosition);
        startAutoPlay();


        /* ==================== SPACES ACCORDION DATA ==================== */
        const spacesData = {
            application: {
                mainImage: '/images/b5.jpeg',
                items: [
                    {
                        number: '01',
                        title: 'Wall',
                        desc: 'Tiles designed specifically for vertical surfaces, offering decorative finishes, lighter compositions, and styles that enhance interior walls.',
                        btnText: 'Explore Wall Tiles',
                        btnLink: '/tile-products?type=wall',
                        thumb: '/images/b1.jpeg'
                    },
                    {
                        number: '02',
                        title: 'Floor',
                        desc: 'Durable tiles engineered to withstand foot traffic, providing strength, slip resistance, and long-lasting performance for residential and commercial floors.',
                        btnText: 'Explore Floor Tiles',
                        btnLink: '/tile-products?type=floor',
                        thumb: '/images/b2.jpeg'
                    },
                    {
                        number: '03',
                        title: 'Countertop',
                        desc: 'High-strength surfaces suitable for countertops and work areas, combining durability with refined finishes that elevate kitchens and bathrooms.',
                        btnText: 'Explore Countertop Tiles',
                        btnLink: '/tile-products?type=countertop',
                        thumb: '/images/b3.jpeg'
                    },
                    {
                        number: '04',
                        title: 'Outdoors',
                        desc: 'Weather-resistant surfaces designed for exterior environments, combining durability with textured finishes that enhance safety and visual appeal across open spaces.',
                        btnText: 'Explore Outdoors Tiles',
                        btnLink: '/tile-products?type=outdoors',
                        thumb: '/images/b4.jpeg'
                    }
                ]
            },
            size: {
                mainImage: '/images/home-desc.png',
                items: [
                    {
                        number: '01',
                        title: 'Small',
                        desc: 'Compact tiles ideal for detailed layouts, backsplashes, and intricate patterns where flexibility in design and placement is key.',
                        btnText: 'Explore Small Tiles',
                        btnLink: '/tile-products?size=small',
                        thumb: '/images/b1.jpeg'
                    },
                    {
                        number: '02',
                        title: 'Medium',
                        desc: 'Versatile tiles that balance coverage and design detail, making them suitable for a wide range of wall and floor applications.',
                        btnText: 'Explore Medium Tiles',
                        btnLink: '/tile-products?size=medium',
                        thumb: '/images/b2.jpeg'
                    },
                    {
                        number: '03',
                        title: 'Large',
                        desc: 'Expansive tiles designed to create seamless surfaces with fewer grout lines, enhancing the sense of openness and modernity in a space.',
                        btnText: 'Explore Large Tiles',
                        btnLink: '/tile-products?size=large',
                        thumb: '/images/b5.jpeg'
                    }
                ]
            },
            look: {
                mainImage: '/images/tiles.webp',
                items: [
                    {
                        number: '01',
                        title: 'Color',
                        desc: 'Browse tiles based on colour palettes to easily match surfaces with interior themes and design preferences.',
                        btnText: 'Explore by Color',
                        btnLink: '/tile-products?look=color',
                        thumb: '/images/b3.jpeg'
                    },
                    {
                        number: '02',
                        title: 'Design & Finish',
                        desc: 'Explore tiles inspired by materials like marble, stone, wood, and concrete, offering distinct visual effects for different design styles.',
                        btnText: 'Explore Design & Finish',
                        btnLink: '/tile-products?look=finish',
                        thumb: '/images/b4.jpeg'
                    },
                    {
                        number: '03',
                        title: 'Pattern',
                        desc: 'Discover tiles featuring decorative motifs and layouts that add character, rhythm, and visual interest to walls and floors.',
                        btnText: 'Explore Pattern Tiles',
                        btnLink: '/tile-products?look=pattern',
                        thumb: '/images/b1.jpeg'
                    }
                ]
            }
        };

        const accordionContainer = document.getElementById('accordionContainer');
        const spacesMainImage = document.getElementById('spacesMainImage');
        const tabButtons = document.querySelectorAll('.space-tab-btn');

        let currentActiveTab = 'application';

        function renderAccordion(tabKey) {
            const data = spacesData[tabKey];
            if (!data) return;

            // Only switch image on tab change
            spacesMainImage.src = data.mainImage;

            accordionContainer.innerHTML = '';
            data.items.forEach((item, index) => {
                const isActive = index === 0; // 01 is open by default
                const itemEl = document.createElement('div');
                itemEl.className = `accordion-item ${isActive ? 'active' : ''}`;
                itemEl.innerHTML = `
                    <div class="accordion-header">
                        <div class="accordion-header-title">
                            <span class="acc-number">${item.number}</span>
                            <span class="acc-name">${item.title}</span>
                        </div>
                        <div class="acc-toggle-icon">
                            <i class="fi fi-rr-arrow-small-right"></i>
                        </div>
                    </div>
                    <div class="accordion-body-wrapper">
                        <div class="accordion-body-content">
                            <div class="acc-text-col">
                                <p>${item.desc}</p>
                                <a href="${item.btnLink}" class="acc-cta-btn">${item.btnText}</a>
                            </div>
                            <div class="acc-thumb-col">
                                <img src="${item.thumb}" alt="${item.title} Thumbnail">
                            </div>
                        </div>
                    </div>
                `;

                const header = itemEl.querySelector('.accordion-header');
                header.addEventListener('click', () => {
                    // Smoothly close other items and open clicked item WITHOUT touching the left image
                    const allItems = accordionContainer.querySelectorAll('.accordion-item');
                    allItems.forEach(it => {
                        if (it === itemEl) {
                            it.classList.add('active');
                        } else {
                            it.classList.remove('active');
                        }
                    });
                });

                accordionContainer.appendChild(itemEl);
            });
        }

        tabButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const tab = btn.getAttribute('data-tab');
                if (tab === currentActiveTab) return;

                tabButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                currentActiveTab = tab;
                renderAccordion(tab);
            });
        });

        // Initial render
        renderAccordion('application');
        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobileMenu");

        hamburger.addEventListener("click", () => {
            mobileMenu.classList.toggle("open");
        });
    </script>
</body>
</html>
