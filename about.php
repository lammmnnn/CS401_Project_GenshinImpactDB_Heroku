<?php
  session_start();
?>
<!DOCTYPE php>
<html>
<head>
    <title>Genshin Impact Database | XLK</title>
    <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div id="navbar">
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
      <a href="/php/guide.php" class="button">GUIDES</a>
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
  <main class="blur-bg">
    <div class="sidebar">
      <div class="scrollbar">
        <div class="sb-padding">
          <div class="sidebar-content">
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="panel">
        <div class="board">
          <div class="board-body">
            <h3>Disclaimer</h3>
            <p>This is a private fanpage. Any written content on this page is personal and soley belong to the owner and do not represent any content-related companies.</p>
            <p>All media, images related to "Genshin Impact" is intellectual property of miHoYo Co Ltd. I do not own any of them.</p>
            <p>All content provided on this fanpage is for informational purpose only. The owner of this fanpage makes no representations as to the accuracy or completeness of any information on this site or found by following any link on this site. The owner will not be liable for any errors or omissions in this information nor for the availability of this information. The owner will not be liable for any losses, injuries, or damages from the display or use of this information.</p>
          </div>
        </div>
      </div>

      </div>
    </section>
  </main>

  <footer class="footer">
    <hr>
    <ul class="footer__nav">
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

</body>
</html>
