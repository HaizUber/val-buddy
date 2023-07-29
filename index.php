<!DOCTYPE html>
<html>
<head>
    <title>R6 Bud | Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 62.5%;
        }

        nav {
            position: fixed;
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 8rem;
            background-color: rgba(34, 42, 65, 0.5);
            background: #333333;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #dd1818, #333333);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #dd1818, #333333); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            text-decoration: none;
            width: 100%;
            top: 0%;
            z-index: 1; /* Move the nav menu above the slideshow */
            opacity: 0.9;
            
            
        }


        #logo {
            margin-left: 1rem;
            font-size: 3.5rem;
            color: rgb(231, 231, 231);
        }

        .nav-links {
            display: flex;
            justify-content: space-around;
            font-size: 2.2rem;
            width: 60%;
            
        }

        .nav-links li {
            list-style: none;
            
            
        }

        .nav-links a {
            text-decoration: none;
            display: inline-block;
            position: relative;
            color: rgb(233, 232, 232);
            
            
        }

        .nav-links a:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: transparent;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }

        .nav-links a:hover:before {
            visibility: visible;
            transform: scaleX(1);
            background-color: rgba(233, 232, 232, 0.7); /* Change link color on hover */
        }


        .nav-links a:hover {
            color: rgba(233, 232, 232, 0.7); /* Change link color on hover */
            background-color: rgba(0, 0, 0, 0.2); /* Add a semi-transparent background color on hover */
        }

        body {
            background-color: rgb(25, 25, 44);
        }

        .burger {
            display: none;
        }

        .burger div {
            width: 25px;
            height: 2px;
            background-color: rgb(233, 232, 232);
            margin: 5px;
        }

        @media screen and (max-width: 1024px) {
            .nav-links {
                width: 60%;
            }
        }

        @media screen and (max-width: 768px) {
            body {
                overflow-x: hidden;
            }
            .nav-links {
                z-index: 2;
                position: absolute;
                right: 0px;
                height: 92vh;
                top: 7vh;
                display: flex;
                background-color: rgba(34, 42, 65, 0.9); /* Slightly transparent background color */
                flex-direction: column;
                align-items: center;
                width: 30%;
                transform: translateX(100%);
                transition: transform 0.5s ease-in;
            }

            .burger {
                display: block;
                cursor: pointer;
            }
        }

        .nav-active {
            transform: translateX(0%);
        }

        #r6-head {
            position: absolute;
            top: 50%;
            left: 50%;
            color: rgb(227, 227, 228);
            font-family: poppins;
            font-size: 6rem;
            transform: translate(-50%, -50%);
            z-index: 2; /* Move the heading above the slideshow and nav menu */
        }

        .abt-content {
            position: absolute;
            width: 100%;
            top: 70%;
            color: rgb(226, 226, 226);
            font-family: poppins;
            z-index: 2; /* Move the content above the slideshow and nav menu */
        }

        #text {
            position: absolute;
            width: 70%;
            top: 50%;
            left: 50%;
            font-size: 3rem;
            transform: translate(-50%, -50%);
        }

        /* Slideshow styles */
        .slider {
            display: flex;
            width: 300%; /* Three times the container width to accommodate three slides */
        }

        .slide {
            flex: 0 0 100%; /* Divide the container width by the number of slides (3 in this case) */
            opacity: 0;
            position: absolute;
            transition: opacity 1s ease-in-out; /* Add transition for smooth fade-in/fade-out */
        }

        .slide.active {
            opacity: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Left and right arrow buttons styles */
        .arrow-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 2; /* Move the arrows above the slideshow and nav menu */
        }

        .left-arrow-btn {
            left: 10px;
        }

        .right-arrow-btn {
            right: 10px;
        }

        .operators {
            padding: 6rem 0;
            text-align: center;
            color: rgb(226, 226, 226);
            margin-top: 10vh; /* Adjust margin to move the .operators div below the slideshow */
        }

        @media screen and (max-width: 768px) {
            .operators {
                margin-top: 30vh;
            }
        }



        /* Footer styles */
        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333333;
            height: 100px;
            position: fixed; /* Change the position to fixed to ensure the footer remains at the bottom of the page */
            bottom: 0;
            left: 0; /* Add this line to ensure the footer spans the full width of the viewport */
            width: 100%;
            z-index: 3; /* Increase the z-index value to move the footer above other elements */
            
        }

        .footer-content {
            display: flex;
            align-items: center;
        }

        .footer-content .social-icons {
            margin-right: 10px;
        }

        .social-icons a {
            color: rgb(226, 226, 226);
            font-size: 24px;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: rgba(233, 232, 232, 0.7);
        }
    </style>
</head>
<body>
    <nav>
        <h1 id="logo">Val Buddy</h1>
        <ul class="nav-links">
            <li><a href="#">Esports</a></li>
            <li><a href="#">Patch Notes</a></li>
            <li><a href="./maps.php">Maps</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="slideshow-container">
        <div class="slider">
            <div class="slide active">
                <img src="images/slide1.jpg" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="images/slide2.jpg" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="images/slide3.jpg" alt="Slide 3">
            </div>
        </div>
        <!-- Left and Right Arrow buttons -->
        <div class="arrow-btn left-arrow-btn" onclick="prevSlide()">&#10094;</div>
        <div class="arrow-btn right-arrow-btn" onclick="nextSlide()">&#10095;</div>
    </div>

    <h2 id="r6-head">Val Buddy</h2>
    <div class="abt-content">
        <p id="text">Is an online tactical first-person shooter game developed by Ubisoft. It combines precise shooting mechanics and strategic gameplay to make the perfect tactical shooter.</p>
    </div>
    <footer>
        <div class="footer-content">
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
            <!--  add more content here if needed -->
        </div>
    </footer>
    <script>
        let slideIndex = 0;
        const slides = document.getElementsByClassName("slide");
        const indicatorBtns = document.getElementsByClassName("indicator-btn");

        function showSlide(n) {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.opacity = 0;
            }
            slideIndex = n;
            if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            }
            slides[slideIndex].style.opacity = 1;
            updateSlideIndicators();
        }

        function prevSlide() {
            showSlide(slideIndex - 1);
        }

        function nextSlide() {
            showSlide(slideIndex + 1);
        }

        // Handle arrow clicks for manual slide navigation
        document.querySelector('.left-arrow-btn').addEventListener('click', prevSlide);
        document.querySelector('.right-arrow-btn').addEventListener('click', nextSlide);

        // Auto transition slides
        setInterval(nextSlide, 10000);

        // Update slide indicators
        function updateSlideIndicators() {
            for (let i = 0; i < indicatorBtns.length; i++) {
                indicatorBtns[i].classList.remove("active");
            }
            indicatorBtns[slideIndex].classList.add("active");
        }

        // Function to handle indicator button click event
        function handleIndicatorClick(index) {
            showSlide(index);
        }

        // Add click event listeners to each indicator button
        for (let i = 0; i < indicatorBtns.length; i++) {
            indicatorBtns[i].addEventListener('click', function() {
                handleIndicatorClick(i);
            });
        }
    </script>
</body>
</html>
