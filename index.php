<?php
  session_start();
?>
<!DOCTYPE php>
<html>
<head>
    <title>Genshin Impact Database | XLK</title>
    <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
  <div id="navbar">
    <div class="logo">
      <a href="/index.php"><img src="../img/mainlogo2.png" height="46" alt=''></a>
    </div>
    <div class="items">
      <a class="button first active">HOME</a>
      <a href="/php/character.php" class="button">CHARACTERS</a>
      <div class="dropdown">
        <a class="button">ITEMS</a>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
        </div>
      </div>
      <a href="" class="button second">GUIDES</a>
      <a href="" class="button">DPS CALCULATOR</a>
      <a href="" class="button">WORLD MAP</a>
    </div>
    <div class="login-div <?php echo isset($_SESSION['form_data'])
     ? ' dropdown'  : '' ; ?>">
      <a class="login-button" <?php echo isset($_SESSION['form_data'])
       ? 'style="text-decoration: underline;">' . $_SESSION['form_data']['username']
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
        <div class="boarder">
          <table>
            <tr><th><h1>Welcome to Genshin Impact Database!</h1></th></tr>
            <tr>
            <td>
            <p><a target="_blank" rel="nofollow noreferrer noopener" class="external text"
              href="https://genshin.mihoyo.com">Official Website</a> • <a target="_blank" rel="nofollow noreferrer noopener"
              class="external text" href="https://genshin.mihoyo.com/en/news">Official News</a> • <a href="" class="mw-redirect"
              title="Genshin Impact Wiki:About">About</a></p>

            <p><b><a href="/wiki/Genshin_Impact" title="Genshin Impact">Genshin Impact</a></b> is an open-world, action RPG
              developed and published by miHoYo for PC, iOS/Android, and PS4 platforms. The game is Free-to-Play with a Gacha
              monetization system in the form of <a href="/wiki/Wishes" title="Wishes">Wishes</a>.<br>
            This wiki is an English resource for information about the Global version of the game.</p>

            <p><b>Please read the <a href="/wiki/Special:Community" title="Special:Community">Community Page</a> before
              editing!</b></p>
            </td></tr></tbody>
          </table>
        </div>
      </div>
      <div class="panel">
        <div class="w100">
          <h3>current banners</h3>
          <hr>
        </div>
      </div>

      <div class="panel">
        <div class="board divide2">
          <div class="board-body text-center">
            <img class="image" src="../img/Banners/currentCharBanner.jpg" alt='' width="1080" height="533">
            <hr>
            Duration: 16/3/2021 - 6/4/2021
          </div>
        </div>
        <div class="board divide2">
          <div class="board-body text-center">
            <img class="image" src="../img/Banners/currentWeaponBanner.jpg" alt='' width="1080" height="533">
            <hr>
            Duration: 16/3/2021 - 6/4/2021
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
