<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiles Collection | Somany - ABC Sanitation and Marble</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css">
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .products-hero {
            padding: 60px 40px 40px;
            text-align: center;
            max-width: 1100px;
            margin: 0 auto;
        }

        .products-hero h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 46px;
            color: #9b4037;
            margin-bottom: 10px;
        }

        .products-hero h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 34px;
            color: #1f1b19;
            margin-bottom: 14px;
        }

        .products-hero p {
            font-size: 15px;
            color: #5a524c;
            line-height: 1.6;
            max-width: 750px;
            margin: 0 auto 30px;
        }

        .filter-tags {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 40px;
        }

        .filter-tag {
            padding: 8px 22px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-decoration: none;
            transition: all 0.25s ease;
            background: #ffffff;
            color: #302b28;
            border: 1px solid #ded9ce;
        }

        .filter-tag.active,
        .filter-tag:hover {
            background: #0d203b;
            color: #ffffff;
            border-color: #0d203b;
        }

        .product-grid {
            max-width: 1200px;
            margin: 0 auto 80px;
            padding: 0 40px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 28px;
            width: 100%;
        }

        .product-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e5e0d8;
            box-shadow: 0 4px 14px rgba(0,0,0,0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        }

        .product-card-img {
            height: 220px;
            background-color: #e5e1d8;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-card-img img {
            transform: scale(1.06);
        }

        .product-card-body {
            padding: 18px 20px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }

        .product-tag {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #9b4037;
            font-weight: 600;
        }

        .product-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
            font-weight: 600;
            color: #1f1b19;
        }

        .product-desc {
            font-size: 12.5px;
            color: #5a524c;
            line-height: 1.5;
        }

        .back-btn-container {
            text-align: center;
            margin: 20px 0 60px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 28px;
            border-radius: 8px;
            border: 1.5px solid #8c8175;
            color: #1f1b19;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: background-color 0.25s ease;
        }

        .back-btn:hover {
            background-color: rgba(140, 129, 117, 0.15);
        }

        @media (max-width: 768px) {
            .product-grid {
                padding: 0 20px;
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
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

    <main class="products-hero">
        <h1>Tiles Collection</h1>
        <h2>Explore Somany Tile Products</h2>
        <p>Browse our extensive catalogue of premium wall tiles, floor tiles, countertops, and outdoor pavers tailored for luxury residential and commercial architecture.</p>

        <div class="filter-tags">
            <a href="#" class="filter-tag active">All Tiles</a>
            <a href="#" class="filter-tag">Wall Tiles</a>
            <a href="#" class="filter-tag">Floor Tiles</a>
            <a href="#" class="filter-tag">Countertops</a>
            <a href="#" class="filter-tag">Outdoors</a>
            <a href="#" class="filter-tag">Small Format</a>
            <a href="#" class="filter-tag">Medium Format</a>
            <a href="#" class="filter-tag">Large Format Slabs</a>
        </div>
    </main>

    <section class="product-grid">
        <div class="product-card">
            <div class="product-card-img">
                <img src="/images/b1.jpeg" alt="Wall Tile">
            </div>
            <div class="product-card-body">
                <span class="product-tag">Wall Collection</span>
                <h3 class="product-title">Crema Marfil Classic</h3>
                <p class="product-desc">Polished surface with natural stone veining, ideal for bathroom and living room vertical walls.</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-img">
                <img src="/images/b2.jpeg" alt="Floor Tile">
            </div>
            <div class="product-card-body">
                <span class="product-tag">Floor Collection</span>
                <h3 class="product-title">Durastone Terra Matt</h3>
                <p class="product-desc">High slip-resistance and engineered durability suited for heavy foot traffic residential spaces.</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-img">
                <img src="/images/b3.jpeg" alt="Countertop">
            </div>
            <div class="product-card-body">
                <span class="product-tag">Countertop</span>
                <h3 class="product-title">Granito Black Pearl</h3>
                <p class="product-desc">Heat, scratch and stain-resistant porcelain slab for modern kitchen counters and vanity tops.</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-card-img">
                <img src="/images/b4.jpeg" alt="Outdoor Tile">
            </div>
            <div class="product-card-body">
                <span class="product-tag">Outdoors</span>
                <h3 class="product-title">Alpine Slate Paving</h3>
                <p class="product-desc">Textured weather-resistant finish crafted for balconies, patios, pathways and poolside surrounds.</p>
            </div>
        </div>
    </section>

    <div class="back-btn-container">
        <a href="/tiles" class="back-btn">← Return to Tiles Overview</a>
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

        hamburger.addEventListener("click", () => {
            mobileMenu.classList.toggle("open");
        });
    </script>
</body>
</html>
