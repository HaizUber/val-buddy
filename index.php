<!DOCTYPE html>
<html>
<head>
    <title>Val Buddy | Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-1nRniuLCZopli7jVLnJ4zNOw3DYIlXaG71rFhFyHUsCnEJU0EKOM6/48VlDr0I9bwn/klGRhSO65OjfULxAMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        body {
            background-color: #19192c;
            font-family: "Poppins", sans-serif;
            font-size: 1.6rem;
        }

        nav {
            position: fixed;
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 8rem;
            width: 100%;
            background: linear-gradient(to right, #dd1818, #333333);
            z-index: 1;
            opacity: 0.9;
        }

        #logo {
            margin-left: 1rem;
            font-size: 3.5rem;
            color: #e7e7e7;
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
            color: #e9e8e8;
            padding: 1rem;
            border-radius: 4px;
        }

        .nav-links a:hover {
            background-color: rgba(233, 232, 232, 0.1);
        }

        .burger {
            display: none;
        }

        .burger div {
            width: 25px;
            height: 2px;
            background-color: #e9e8e8;
            margin: 5px;
        }

        @media screen and (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .burger {
                display: block;
                cursor: pointer;
            }

            .nav-active {
                transform: translateX(0%);
            }

            .nav-links {
                z-index: 2;
                position: absolute;
                right: 0;
                height: 92vh;
                top: 7vh;
                display: flex;
                background-color: rgba(34, 42, 65, 0.9);
                flex-direction: column;
                align-items: center;
                width: 30%;
                transform: translateX(100%);
                transition: transform 0.5s ease-in;
            }

            .burger.active .line1 {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .burger.active .line2 {
                opacity: 0;
            }

            .burger.active .line3 {
                transform: rotate(45deg) translate(-5px, -6px);
            }
        }

        .slider {
            display: flex;
            width: 300%;
            transition: transform 1s ease;
        }

        .slide {
            flex: 0 0 100%;
            opacity: 0;
            position: absolute;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .arrow-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 2;
        }

        .left-arrow-btn {
            left: 10px;
        }

        .right-arrow-btn {
            right: 10px;
        }

        #val-head {
            position: absolute;
            top: 45%;
            left: 50%;
            color: #e3e3e4;
            font-size: 4rem;
            transform: translate(-50%, -50%);
            z-index: 3;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out 0.5s forwards;
            scale: 150rem;
        }

        .abt-content {
            position: absolute;
            width: 80%;
            top: 60%;
            left: 50%;
            color: #e2e2e2;
            z-index: 3;
            opacity: 0;
            transform: translate(-50%, -50%);
            animation: fadeIn 1.5s ease-in-out 1s forwards;
        }

        footer {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #333333;
    height: 100px;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    
}

.footer-content {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    
}

.social-icons {
    display: flex;
    align-items: center;
    z-index: 9999; /* Set a high z-index value to move the footer above other elements */
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

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
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
                <img src="http://localhost/files/Valbuddy/images/slide1.jpg" alt="Slide 1">
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

    <h2 id="val-head">Val Buddy</h2>
    <div class="abt-content">
        <p id="text">Is an online tactical first-person shooter game developed by Ubisoft. It combines precise shooting mechanics and strategic gameplay to make the perfect tactical shooter.</p>
    </div>
    <footer>
    <div class="footer-content">
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
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
