<?php
  session_start();
?>
<!DOCTYPE php>
<html>
<head>
    <title>Genshin Impact Database | XLK</title>
    <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/guide.css">
</head>
<body class="forum">
  <div id="navbar" style="background-color: rgba(0,0,0,0.7);">
    <div class="logo">
      <a href="/index.php"><img src="../img/mainlogo2.png" height="46" alt=''></a>
    </div>
    <div class="items">
      <a href="/index.php" class="button first">HOME</a>
      <a href="/php/character.php" class="button">CHARACTERS</a>
      <div class="dropdown">
        <a class="button">ITEMS</a>
        <div class="dropdown-content">
          <a href="/php/weapon.php">Weapons</a>
          <a href="/php/material.php">Materials</a>
        </div>
      </div>
      <a href="" class="button active">GUIDES</a>
    </div>
    <div class="login-div <?php echo isset($_SESSION['username'])
     ? ' dropdown'  : '' ; ?>">
      <a class="login-button" <?php echo isset($_SESSION['username'])
       ? 'style="text-decoration: underline;">' . $_SESSION['username']
        : 'href="/php/login.php">Sign in' ; ?></a>
      <div class="dropdown-content">
        <a href="/php/user_setting.php">Profile Setting</a>
        <a href="/handler/logout_handler.php">Log out</a>
      </div>
    </div>

  </div>
  <main style="padding-top: 30px;">
    <div class="layout">
      <div class="layout__main">
        <div class="main__header">
          <div class="banner">
            <div class="slideshow-container">

              <!-- Full-width images with number and caption text -->
              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>

              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="article-list__header">
            <h6>Article</h6>
          </div>
          <div class="article-list__body">
            <div class="article-card">
              <div class="article-card__header">
                <p>No info</p>
              </div>
              <a>
                <div class="article-card__title">
                  <h6 style="font-family: "Segoe UI",Arial,sans-serif;">No article yet</h6>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout__sub">
        <div class="post-wrap">
          <div class="post-block">
            <a href="/php/post.php">
              <button class="post-button">Post</button>
            </a>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="footer">
    <hr>
    <ul class="footer__nav black">
      <a href="/about"> About </a>
      <a href="/contact"> Contact </a>
      <a href="/disclaimer"> Disclaimer </a>
    </ul>
    <p><span>©&nbsp;2021&nbsp; Genshin Impact Database</span></p>
  </footer>

<!--  <script>resetCookies();</script>  -->

<!-- MAKE NAVBAR STICKY -->
    <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
    </script>
</body>
</html>
