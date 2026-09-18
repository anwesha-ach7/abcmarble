<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Solutions - ABC Sanitation and Marble</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fcfbf9;
            color: #1f1b19;
        }

        .page-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 80px 40px;
            text-align: center;
        }

        .page-container h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 52px;
            font-weight: 600;
            color: #9b4037;
            margin-bottom: 20px;
        }

        .page-container p {
            font-size: 16px;
            color: #5a524c;
            max-width: 650px;
            margin: 0 auto 30px auto;
            line-height: 1.6;
        }

        .back-home {
            display: inline-block;
            text-decoration: none;
            color: #1f1b19;
            border: 2px solid #8c8175;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .back-home:hover { background-color: #f3ebd7; }
    </style>
</head>
<body>

    <!-- Inner Page Navbar -->
    <nav class="inner-navbar">
        <div class="nav-left">
            <a href="/tiles">Tiles</a>
            <a href="/bathware">Bathware</a>
            <a href="/building-solutions" style="font-weight: 600;">Building Solutions</a>
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

    <div class="page-container">
        <h1>Building Solutions</h1>
        <p>Comprehensive construction solutions and high quality adhesives, grouts, and waterproofing systems for every architectural need.</p>
        <a href="/" class="back-home">← Back to Home</a>
    </div>

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

    <script>
        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobileMenu");
        if (hamburger) hamburger.addEventListener("click", () => mobileMenu.classList.toggle("open"));
    </script>
</body>
</html>
