<?php
  session_start();
?>
<!DOCTYPE php>

<html>
<head>
    <title>Characters | Genshin Impact Database | XLK</title>
    <link rel="shortcut icon" type="image/jpg" href="/img/favicon.ico">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css">
</head>
<body>
  <div id="navbar">
    <div class="logo">
      <a href="/index.php"><img src="/img/mainlogo2.png" height="46" alt=''></a>
    </div>
    <div class="items">
      <a href="/index.php" class="button first">HOME</a>
      <a class="button active">CHARACTERS</a>

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
    <aside class="sidebar">
          <div class="os-viewport" data-simplebar>
            <div class="sidebar-content">
              <ul class="sidenav">
                <div class="board text-center sidenav-head">Character List</div>
                <?php
                  require_once 'Dao.php';
                  $dao = new Dao();
                  $characters = $dao->getCharacters();

                  foreach ($characters as $character) {
                    if ($_SESSION['currentChar'] == htmlspecialchars($character['name'])) {
                      echo
                      "<li><a class='sidenav-button active' href='#" . htmlspecialchars($character['name']) . "' name='" . htmlspecialchars($character['name']) . "'>" .
                        "<div class='board' style='padding: 0;'>" .
                          "<img class='image' src='" . htmlspecialchars($character['img']) . "' alt=''></div>" .
                        "<div class='nameblock'>" .
                          "<h4>" . htmlspecialchars($character['name']) . "</h4>" .
                          "</div>" .
                        "</a></li>";
                    } else {
                        echo
                        "<li><a class='sidenav-button' href='#" . htmlspecialchars($character['name']) . "' name='" . htmlspecialchars($character['name']) . "'>" .
                          "<div class='board' style='padding: 0;'>" .
                            "<img class='image' src='" . htmlspecialchars($character['img']) . "' alt=''></div>" .
                          "<div class='nameblock'>" .
                            "<h4>" . htmlspecialchars($character['name']) . "</h4>" .
                            "</div>" .
                          "</a></li>";
                    }
                  }
                ?>

              </ul>
        </div>
      </div>
    </aside>

      <section class="content">

      </section>
  </main>

  <footer class="footer">
    <hr>
    <ul class="footer__nav">
      <a href="/about.php"> About </a>
      <a href="/about.php"> Contact </a>
      <a href="/about.php"> Disclaimer </a>
    </ul>
    <p><span>©&nbsp;2021&nbsp; Genshin Impact Database</span></p>
  </footer>

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
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/character_nav.js"></script>
</body>
</html>
