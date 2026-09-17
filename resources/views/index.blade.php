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
            font-family: 'Britney4', sans-serif;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.67);
        }

        .hero-text h1 {
            color: white;
            font-size: 50px;
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

            background-color: #f3ebd7;

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
            width: 100%;
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
            background-color: #e9dfc9;
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

                <a href="#">Tiles</a>

                <a href="#">Bathware</a>

                <a href="#">Building Solutions</a>

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
                <a href="#">Tiles</a>
                <a href="#">Bathware</a>
                <a href="#">Building Solutions</a>
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