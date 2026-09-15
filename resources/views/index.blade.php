<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ABC Sanitation and Marble</title>

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

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

            z-index: 20;
        }

        .hero-text {
            position: absolute;

            top: 45%;
            left: 50%;

            transform: translate(-50%, -50%);

            text-align: center;

            width: 90%;

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
                width: 200px;
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

                <span class="search-icon">⌕</span>

                <span class="login-icon">♙</span>

            </div>

            <div class="hamburger">
                ☰
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

        let startTop, startWidth, endTop, endLeft;
        let isMobile;

        function getEndWidth() {
            if (window.innerWidth <= 480) return 90;
            if (window.innerWidth <= 768) return 100;
            return 130;
        }

        function measureStart() {
            isMobile = window.innerWidth <= 768;

            const rect = logo.getBoundingClientRect();
            startTop = rect.top;
            startWidth = rect.width;

            const endWidth = getEndWidth();
            const aspectRatio = logo.naturalHeight / logo.naturalWidth;
            const endHeight = endWidth * aspectRatio;
            const navbarHeight = navbar.offsetHeight;
            endTop = (navbarHeight - endHeight) / 2;

            if (isMobile) {
                const padding = window.innerWidth <= 480 ? 20 : 25;
                endLeft = padding;
            }

            logo.style.left = isMobile ? `${rect.left}px` : "50%";
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
                const startLeftPx = logo.getBoundingClientRect().left;
                const currentLeft = lerp(startLeftPx, endLeft, progress === 0 ? 0 : progress);
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

        function measureStart() {
            isMobile = window.innerWidth <= 768;

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
    </script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><p>hey</p>
</body>

</html>