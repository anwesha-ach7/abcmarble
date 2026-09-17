<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ABC Sanitation and Marble</title>

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
    

        .hero {
            width: 100%;
            height: 100vh;

            background-image: url('/images/mainbg.png');
            background-size: 100% auto;
            background-position: center;
            background-repeat: no-repeat;

            position: relative;
        }

        .overlay-image {
            position: fixed;
            top: 1%;
            left: 50%;

            transform: translateX(-50%);

            width: 230px;
            height: auto;

            z-index: 110;
        }

        .hero-text {
            position: absolute;

            top: 45%;
            left: 50%;

            transform: translate(-50%, -50%);

            text-align: center;

            width: 90%;
            font-family: "Montserrat", serif;
            font-weight: 200;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.67);
        }

        .hero-text h1 {
            color: white;
            font-size: 50px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        .hero-text p {
            color: white;
            font-size: 20px;
            margin-top: 20px;
        }

        #typing-text {
            color: #b8262d;

            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.35);
        }
        .home-desc {
            width: 100%;
            min-height: 100vh;

            background-color: #F5EFE1;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            box-sizing: border-box;
            padding: 60px 50px 70px;

            gap: 60px;
        }

        /* TOP ROW (LEFT & RIGHT COLUMNS) */
        .desc-row {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 35px;
        }

        /* LEFT SIDE */

        .desc-left {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .desc-left img {
            width: 80%;
            max-width: 620px;
            height: auto;

            display: block;
        }


        /* RIGHT SIDE */

        .desc-right {
            width: 48%;

            display: flex;
            flex-direction: column;
            align-items: flex-start;

            box-sizing: border-box;

            padding-right: 35px;
        }


        /* MAIN HEADING */

        .desc-right h2 {
            margin: 0 0 10px;

            font-family: "Cormorant Garamond", serif;

            font-size: 38px;
            font-weight: 500;

            line-height: 1.05;

            color: #1f1b19;
        }


        /* SCRIPT TAGLINE */

        .desc-right h3 {
            margin: 0 0 28px;

            font-family: "Dancing Script", cursive;

            font-size: 22px;
            font-weight: 500;

            line-height: 1.35;

            color: #9b4037;
        }


        /* PARAGRAPHS */

        .desc-text {
            width: 100%;
        }

        .desc-text p {
            margin: 0 0 20px;

            font-family: "Montserrat", sans-serif;

            font-size: 12px;
            font-weight: 400;

            line-height: 1.45;

            color: #403a37;
        }


        /* EXPLORE BUTTON */

        .explore-btn {
            width: 100%;
            height: 50px;

            margin-top: 3px;

            border: 2px solid #8c8175;

            box-sizing: border-box;

            display: flex;
            align-items: center;
            justify-content: center;

            text-decoration: none;

            font-family: "Montserrat", sans-serif;

            font-size: 20px;
            font-weight: 400;

            color: #302b28;

            background: transparent;

            transition: 0.3s ease;
        }


        .explore-btn span {
            margin-left: 7px;

            font-size: 24px;
        }


        .explore-btn:hover {
            background-color: rgba(140, 129, 117, 0.12);
        }

        /* BOTTOM ROW: GALLERY STRIP */
        .desc-gallery {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .desc-gallery-tagline {
            font-family: "Dancing Script", cursive;
            font-size: 26px;
            font-weight: 600;
            color: #9b4037;
            text-align: center;
            letter-spacing: 0.5px;
        }

        .desc-gallery-frame {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px;
            border: 2px solid #8c8175;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.25);
            box-sizing: border-box;
        }

        .desc-gallery-item {
            flex: 1;
            height: 220px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .desc-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .desc-gallery-item:hover img {
            transform: scale(1.06);
        }

        .sell-things {
            width: 100%;
            background-color: #faf9f6;
            padding: 60px 50px 80px;
            box-sizing: border-box;
        }

        .sell-header {
            width: 100%;
            margin-bottom: 35px;
        }

        .sell-header h2 {
            font-family: "Cormorant Garamond", serif;
            font-size: 48px;
            font-weight: 600;
            color: #9b4037;
            margin-bottom: 12px;
        }

        .sell-header p {
            font-family: "Montserrat", sans-serif;
            font-size: 16px;
            color: #5a524c;
            line-height: 1.6;
            max-width: 850px;
        }

        .sell-grid {
            width: 100%;
            display: flex;
            gap: 30px;
        }

        .sell-card {
            flex: 1;
            background-color: #f2f2f0;
            border-radius: 24px;
            padding: 18px;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .sell-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 32px rgba(0, 0, 0, 0.18);
        }

        .sell-card-img {
            width: 100%;
            height: 380px;
            border-radius: 16px;
            overflow: hidden;
            background-color: #fff;
        }

        .sell-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .sell-card:hover .sell-card-img img {
            transform: scale(1.08);
        }

        .sell-card-content {
            padding: 22px 8px 12px 8px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .sell-card-content h3 {
            font-family: "Dancing Script", cursive;
            font-size: 32px;
            font-weight: 600;
            color: #9b4037;
            margin: 0;
        }

        .sell-card-content p {
            font-family: "Montserrat", sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #403a37;
            margin: 0;
        }

        .sell-arrow {
            display: inline-block;
            margin-left: 4px;
            transition: transform 0.3s ease;
        }

        .sell-card:hover .sell-arrow {
            transform: translateX(4px);
        }

        .statement-banner {
            width: 100%;
            background-color: #f4efe4;
            padding: 70px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-sizing: border-box;
            gap: 15px;
        }

        .statement-tag {
            font-family: "Montserrat", sans-serif;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 3px;
            color: #9b4037;
            text-transform: uppercase;
        }

        .statement-banner h2 {
            font-family: "Cormorant Garamond", serif;
            font-size: 40px;
            font-weight: 500;
            color: #1f1b19;
            max-width: 800px;
            line-height: 1.3;
            margin: 5px 0;
        }

        .statement-banner h2 span {
            color: #9b4037;
            font-weight: 600;
        }

        .tile-separator {
            width: 100%;
            overflow: hidden;
            display: flex;
        }

        .tile-separator img {
            width: 100%;
            height: 65px;
            object-fit: cover;
            display: block;
        }

        .marquee-strip {
            width: 100%;
            overflow: hidden;
            background-color: #e3cce6;
            border-top: 1px solid #8c8175;
            border-bottom: 1px solid #8c8175;
            padding: 12px 0;
            display: flex;
            white-space: nowrap;
        }

        .marquee-track {
            display: flex;
            flex-shrink: 0;
            white-space: nowrap;
            animation: marqueeScroll 20s linear infinite;
        }

        .marquee-track span {
            font-family: "Montserrat", sans-serif;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 3px;
            color: #302b28;
            text-transform: uppercase;
            padding-right: 30px;
        }

        @keyframes marqueeScroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        .contact-section {
            width: 100%;
            display: flex;
            background-color: #faf9f6;
            min-height: 540px;
        }

        .contact-left {
            width: 50%;
            display: flex;
            overflow: hidden;
        }

        .contact-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .contact-right {
            width: 50%;
            padding: 60px 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-sizing: border-box;
            background-color: #faf9f6;
        }

        .contact-right h2 {
            font-family: "Cormorant Garamond", serif;
            font-size: 42px;
            font-weight: 600;
            color: #9b4037;
            margin-bottom: 25px;
        }

        .contact-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contact-input,
        .contact-textarea {
            width: 100%;
            border: 1px solid #8c8175;
            background: transparent;
            padding: 14px 16px;
            font-family: "Montserrat", sans-serif;
            font-size: 13px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #1f1b19;
            box-sizing: border-box;
            outline: none;
        }

        .contact-input::placeholder,
        .contact-textarea::placeholder {
            color: #5a524c;
        }

        .contact-input:focus,
        .contact-textarea:focus {
            border-color: #1f1b19;
        }

        .contact-textarea {
            height: 120px;
            resize: none;
        }

        .contact-btn {
            width: 100%;
            height: 50px;
            border: 2px solid #8c8175;
            background: transparent;
            font-family: "Montserrat", sans-serif;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #302b28;
            cursor: pointer;
            transition: 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }

        .contact-btn:hover {
            background-color: rgba(140, 129, 117, 0.12);
             box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        @media (max-width: 900px) {
            .desc-row {
                flex-direction: column;
            }

            .desc-left,
            .desc-right {
                width: 100%;
                padding-right: 0;
            }

            .desc-gallery-frame {
                flex-wrap: wrap;
                justify-content: center;
            }

            .desc-gallery-item {
                flex: 1 1 calc(33.333% - 14px);
                min-width: 130px;
                height: 180px;
            }

            .sell-grid {
                flex-direction: column;
            }

            .sell-card-img {
                height: 280px;
            }

            .sell-things {
                padding: 60px 25px;
                background-color: #9aa7ba;
            }

            .contact-section {
                flex-direction: column;
            }

            .contact-left,
            .contact-right {
                width: 100%;
                padding: 40px 25px;
            }
        }

        @media (max-width: 768px) {

            .hero {
                background-image: url('/images/mainbg2.png');
                background-size: 100% auto;
                background-position: top center;
            }

            .overlay-image {
                left: 52%;
            }

            .hero-text {
                top: 38%;
            }

            .hero-text h1 {
                font-size: 45px;
            }

            .hero-text p {
                font-size: 17px;
                padding: 0 10px;
            }

        }

        @media (max-width: 480px) {

            .hero {
                background-image: url('/images/mainbg3.png');
                background-size: 100% auto;
                background-position: top center;
            }

            .overlay-image {
                top: 1%;
                width: 140px;
                height: auto;
            }

            .hero-text {
                top: 40%;
            }

            .hero-text h1 {
                font-size: 45px;
                min-height: 108px;
            }

            .hero-text p {
                font-size: 18px;
                padding: 0 20px;
                margin-top: 5px;
            }

        }

    </style>

</head>

<body>

            <section class="hero">

                <nav class="navbar">

            <div class="nav-left">

                <a href="/tiles">Tiles</a>

                <a href="/bathware">Bathware</a>

                <a href="/building-solutions">Building Solutions</a>

            </div>

            <div class="nav-right">

                <a href="#" class="catalogues-link">Catalogues</a>

                <span class="search-icon">
                    <i class="fi fi-rr-search"></i>
                </span>

                <span class="login-icon">
                   <i class="fi fi-sr-user"></i>
                </span>

                <div class="hamburger" id="hamburger">
                    <i class="fi fi-rr-menu-burger"></i>
                </div>

            </div>

            <div class="mobile-menu" id="mobileMenu">
                <a href="/tiles">Tiles</a>
                <a href="/bathware">Bathware</a>
                <a href="/building-solutions">Building Solutions</a>
                <a href="#">Catalogues</a>
            </div>

        </nav>

        <img src="/images/somany-nobg.png" class="overlay-image">

        <div class="hero-text">

            <h1>
                Tiles <span id="typing-text"></span>
            </h1>

            <p>
                Your space reflects your personality; make it impressive.
            </p>

        </div>

    </section>


    <section class="next-section">

    </section>

    <div class="home-desc">
        <!-- TOP ROW: Left Image & Right Description -->
        <div class="desc-row">
            <div class="desc-left">
                <img src="/images/home-desc.png" alt="ABC Sanitation and Marble">
            </div>

            <div class="desc-right">

                <h2>ABC Sanitation and Marble</h2>

                <h3>
                    we transform spaces with elegant tiles, premium
                    bathware and complete building solutions
                </h3>

                <div class="desc-text">

                    <p>
                        We are a Butwal-based supplier of quality tiles, marble,
                        sanitaryware, bathware, and building solutions, serving homes,
                        businesses, and construction projects across the region. We work
                        with established manufacturers such as Somany Ceramics,
                        bringing a wide selection of their tiles and surface solutions
                        to customers in Nepal through our local presence.
                    </p>

                    <p>
                        Our range includes elegant floor and wall tiles, durable surfaces,
                        bathroom fittings, sanitaryware, and other products designed to
                        combine functionality with contemporary design. Whether it is a
                        new home, a renovation, a commercial space, or a larger
                        construction project, we aim to provide reliable products that suit
                        different styles, requirements, and budgets.
                    </p>

                    <p>
                        With a focus on quality materials, modern designs, and dependable
                        service, we help customers find the right products to create spaces
                        that are practical, comfortable, and visually appealing.
                    </p>

                </div>

                <a href="#" class="explore-btn">
                    Explore <span>→</span>
                </a>

            </div>
        </div>

        <!-- BOTTOM ROW: Gallery Strip -->
        <div class="desc-gallery">
            <p class="desc-gallery-tagline">
                our curated creations are timeless, elegant, sustainable & crafted with love
            </p>
            <div class="desc-gallery-frame">
                <div class="desc-gallery-item">
                    <img src="/images/b1.jpeg" alt="Tile Collection 1">
                </div>
                <div class="desc-gallery-item">
                    <img src="/images/b2.jpeg" alt="Tile Collection 2">
                </div>
                <div class="desc-gallery-item">
                    <img src="/images/b3.jpeg   " alt="Tile Collection 3">
                </div>
                <div class="desc-gallery-item">
                    <img src="/images/b4.jpeg " alt="Tile Collection 4">
                </div>
                <div class="desc-gallery-item">
                    <img src="/images/b5.jpeg" alt="Tile Collection 5">
                </div>
            </div>
        </div>
    </div>

    <div class="sell-things">
        <div class="sell-header">
            <h2>Our Offerings</h2>
            <p>Discover the building blocks of enduring, inspiring spaces with our range of tiles, bathware, and building solutions.</p>
        </div>

        <div class="sell-grid">
            <a href="/tiles" class="sell-card">
                <div class="sell-card-img">
                    <img src="/images/tiles.webp" alt="Explore Tiles">
                </div>
                <div class="sell-card-content">
                    <h3>Explore Tiles</h3>
                    <p>Our tile collections, to fulfil your wall, floor or outdoor requirements. <span class="sell-arrow">→</span></p>
                </div>
            </a>

            <a href="/bathware" class="sell-card">
                <div class="sell-card-img">
                    <img src="/images/bathwares.webp" alt="Explore Bathware">
                </div>
                <div class="sell-card-content">
                    <h3>Explore Bathware</h3>
                    <p>Our sanitaryware and vanity alternatives, along with fittings & fixtures. <span class="sell-arrow">→</span></p>
                </div>
            </a>

            <a href="/building-solutions" class="sell-card">
                <div class="sell-card-img">
                    <img src="/images/bs.webp" alt="Explore Building Solutions">
                </div>
                <div class="sell-card-content">
                    <h3>Explore Building Solutions</h3>
                    <p>Our range of Building solutions takes care of all your construction needs. <span class="sell-arrow">→</span></p>
                </div>
            </a>
        </div>
    </div>

    <div class="statement-banner">
        <span class="statement-tag">ABC Sanitation and Marble</span>
        <h2><span>TRANSFORM</span> your space and craft<br>the perfect home.</h2>
    </div>

    <div class="tile-separator">
        <img src="/images/tiletile.png" alt="Tiles Separator">
    </div>

    <div class="marquee-strip">
        <div class="marquee-track">
            <span>• PREMIUM TILES • LUXURY BATHWARE • BUTWAL • PREMIUM TILES • LUXURY BATHWARE • BUTWAL • PREMIUM TILES • LUXURY BATHWARE • BUTWAL • PREMIUM TILES • LUXURY BATHWARE • BUTWAL •</span>
            <span>• PREMIUM TILES • LUXURY BATHWARE • BUTWAL • PREMIUM TILES • LUXURY BATHWARE • BUTWAL • PREMIUM TILES • LUXURY BATHWARE • BUTWAL • PREMIUM TILES • LUXURY BATHWARE • BUTWAL •</span>
        </div>
    </div>

    <div class="contact-section">
        <div class="contact-left">
            <img src="/images/contact-us.png" alt="Contact ABC Marble">
        </div>

        <div class="contact-right">
            <h2>Contact Us</h2>
            <form class="contact-form" action="#" method="POST">
                <input type="text" class="contact-input" placeholder="NAME" required>
                <input type="tel" class="contact-input" placeholder="PHONE">
                <input type="email" class="contact-input" placeholder="EMAIL" required>
                <textarea class="contact-textarea" placeholder="MESSAGE" required></textarea>
                <button type="submit" class="contact-btn">Submit</button>
            </form>
        </div>
    </div>

    <script>

        const text = "that adorn your space";

        let i = 0;

        function typeText() {

            if (i < text.length) {

                document.getElementById("typing-text").innerHTML += text[i];

                i++;

                setTimeout(typeText, 100);

            } else {

                setTimeout(() => {

                    document.getElementById("typing-text").innerHTML = "";

                    i = 0;

                    typeText();

                }, 2000);

            }

        }

        typeText();


        const navbar = document.querySelector(".navbar");
        const logo = document.querySelector(".overlay-image");
        const hero = document.querySelector(".hero");

        let startTop, startWidth, startLeft, endTop, endLeft;
        let isMobile;

        function getEndWidth() {
            if (window.innerWidth <= 480) return 70;
            if (window.innerWidth <= 1024) return 105;
            return 130;
        }

        function measureStart() {
            isMobile = window.innerWidth <= 1024;

            const rect = logo.getBoundingClientRect();
            startTop = rect.top;
            startWidth = rect.width;
            startLeft = rect.left;

            const endWidth = getEndWidth();
            const aspectRatio = logo.naturalHeight / logo.naturalWidth;
            const endHeight = endWidth * aspectRatio;
            const navbarHeight = navbar.offsetHeight;
            endTop = (navbarHeight - endHeight) / 2;

            if (isMobile) {
                const padding = window.innerWidth <= 480 ? 20 : 25;
                endLeft = padding;
            }

            logo.style.left = isMobile ? `${startLeft}px` : "50%";
            logo.style.transform = isMobile ? "none" : "translateX(-50%)";
        }

        function lerp(start, end, t) {
            return start + (end - start) * t;
        }

        function updateLogo() {
            const scrollY = window.scrollY;
            const scrollDistance = 300;
            const progress = Math.min(Math.max(scrollY / scrollDistance, 0), 1);

            const endWidth = getEndWidth();
            const currentTop = lerp(startTop, endTop, progress);
            const currentWidth = lerp(startWidth, endWidth, progress);

            logo.style.top = `${currentTop}px`;
            logo.style.width = `${currentWidth}px`;

            if (isMobile) {
                const currentLeft = lerp(startLeft, endLeft, progress);
                logo.style.left = `${currentLeft}px`;
            }

            if (progress >= 1) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        }

        window.addEventListener("load", () => {
            measureStart();
            updateLogo();
        });

        window.addEventListener("resize", () => {
            if (window.scrollY === 0) {
                measureStart();
                updateLogo();
            }
        });

        window.addEventListener("scroll", updateLogo);

        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobileMenu");

        hamburger.addEventListener("click", () => {
            mobileMenu.classList.toggle("open");
        });
    </script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><p>hey</p>

</body>

</html>