<!DOCTYPE html>
<html>
<head>
<title>Val Buddy | Maps</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-1nRniuLCZopli7jVLnJ4zNOw3DYIlXaG71rFhFyHUsCnEJU0EKOM6/48VlDr0I9bwn/klGRhSO65OjfULxAMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0f4d2cc005.js" crossorigin="anonymous"></script>
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
            padding-bottom: 75px;
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
            animation: fadeInNavMenu 1s ease-in-out forwards;
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
            /* Add transition for smooth animation on hover */
            transition: transform 0.2s ease-out;
        }

        .nav-links a:hover {
            /* Add animation on hover */
            transform: scale(1.1);
            /* Add any other visual effects you desire */
            /* For example, changing the background color */
            background-color: rgba(233, 232, 232, 0.2);
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

        /* New styles for animations */
        /* Animation for nav menu on load */
        @keyframes fadeInNavMenu {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Animation for burger menu on load */
        @keyframes fadeInBurgerMenu {
            from { transform: translateY(-30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Animation for footer on load */
        @keyframes fadeInFooter {
            from { opacity: 0; }
            to { opacity: 1; }
        }


/* Add the following media query for smaller screens */
@media screen and (max-width: 768px) {
  nav {
    flex-direction: column;
    align-items: flex-start;
    padding: 1rem;
  }

  .nav-links {
    flex-direction: column;
    align-items: center;
    width: 100%;
    margin-top: 1rem;
  }

  .nav-links li {
    margin: 0.5rem;
  }

  .burger {
    display: block;
  }

  .nav-links {
    display: none;
    position: absolute;
    top: 7rem;
    left: 0;
    width: 100%;
    background-color: rgba(34, 42, 65, 0.9);
    flex-direction: column;
    align-items: center;
  }

  .nav-links a {
    padding: 1rem 0;
  }

  .nav-active .nav-links {
    display: flex;
  }

 
  footer {
    justify-content: space-between;
    padding: 1rem;
  }

  .card-container {
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 15px;
  }
}


/* map cards */
maincard {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          align-items: center;
          padding-top: 120px;
          min-height: 100vh;
          background-color: #f0f0f0;
          overflow-y: auto;
        }

        .card-container {
          display: flex;
          justify-content: space-between;
          max-width: 1200px;
          margin: 0 auto;
          flex-wrap: wrap;
        }

        .card {
          width: calc(90.33% - 20px); /* Each card takes up 33.33% of the container with a small gap of 20px between them */
          margin-bottom: 20px; /* Add some space between rows */
          background-color: #fff;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          border-radius: 8px;
          overflow: hidden;
          transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card img {
          width: 100%;
          height: 200px;
          object-fit: cover;
          border-top-left-radius: 8px;
          border-top-right-radius: 8px;
        }

        .card-content {
          padding: 20px;
        }

        .card h2 {
          font-size: 1.8rem;
          margin-bottom: 10px;
        }

        .card p {
          font-size: 1.6rem;
          color: #555;
        }

        .card-link {
          display: block;
          text-decoration: none;
          color: inherit;
        }

        /* Hover animation for cards */
        .card-link:hover .card {
          transform: scale(1.03);
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

/* Additional styles for footer */
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
  z-index: 9999;
}

.social-icons a {
  color: #e2e2e2;
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
            <a href="index.php" id="back-button"><i class="fa-solid fa-arrow-left"></i></i></a>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

<maincard>
  <div class="card-container">
    <div class="card-link" onclick="window.location.href='page1.html';">
    
      <div class="card">
        <img src="images/ascent.jpg" alt="Card Image 1">
        <div class="card-content">
          <h2>Ascent</h2>
          <p>It's ascent lmao.</p>
        </div>
      </div>
    </div>

    <div class="card-link" onclick="window.location.href='page2.html';">
      <div class="card">
        <img src="images/bind.jpg" alt="Card Image 2">
        <div class="card-content">
          <h2>Bind</h2>
          <p>Bindy place.</p>
        </div>
      </div>
    </div>

    <div class="card-link" onclick="window.location.href='page3.html';">
      <div class="card">
        <img src="images/split.jpg" alt="Card Image 3">
        <div class="card-content">
          <h2>Split</h2>
          <p>Nihonjin.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card-link" onclick="window.location.href='page4.html';">
    
    <div class="card">
      <img src="images/ascent.jpg" alt="Card Image 4">
      <div class="card-content">
        <h2>Haven</h2>
        <p>Bing chillin.</p>
      </div>
    </div>
  </div>

  <div class="card-link" onclick="window.location.href='page5.html';">
    
    <div class="card">
      <img src="images/ascent.jpg" alt="Card Image 5">
      <div class="card-content">
        <h2>Breeze</h2>
        <p>Aloha.</p>
      </div>
    </div>
  </div>

  <div class="card-link" onclick="window.location.href='page6.html';">
    
    <div class="card">
      <img src="images/ascent.jpg" alt="Card Image 6">
      <div class="card-content">
        <h2>Fracture</h2>
        <p>Ziplines.</p>
      </div>
    </div>
  </div>

  <div class="card-link" onclick="window.location.href='page7.html';">
    
    <div class="card">
      <img src="images/ascent.jpg" alt="Card Image 7">
      <div class="card-content">
        <h2>Pearl</h2>
        <p>Yeaaa.</p>
      </div>
    </div>
  </div>

  <div class="card-link" onclick="window.location.href='page8.html';">
    
    <div class="card">
      <img src="images/ascent.jpg" alt="Card Image 8">
      <div class="card-content">
        <h2>Lotus</h2>
        <p>No.</p>
      </div>
    </div>
  </div>

  <div class="card-link" onclick="window.location.href='page9.html';">
    
    <div class="card">
      <img src="images/ascent.jpg" alt="Card Image 9">
      <div class="card-content">
        <h2>Icebox</h2>
        <p>brrrrr.</p>
      </div>
    </div>
  </div>
</maincard>

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
        // Additional script for animating nav menu and footer
        // Add class to nav menu to trigger animation
        const navMenu = document.querySelector('nav');
        navMenu.classList.add('animate-nav-menu');

        // Add class to footer to trigger animation
        const footer = document.querySelector('footer');
        footer.classList.add('animate-footer');
</script>
</body>
</html>
