<?php
  session_start();
?>
<!DOCTYPE php>

<html>
<head>
    <title>Weapons | Genshin Impact Database | XLK</title>
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
      <a href="/php/character.php" class="button">CHARACTERS</a>

      <div class="dropdown">
        <a class="button active">ITEMS</a>
        <div class="dropdown-content">
          <a>Weapons</a>
          <a href="material.php">Materials</a>
        </div>
      </div>
      <a href="guide.php" class="button second">GUIDES</a>
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
                <div class="board text-center sidenav-head">Weapon List</div>
                <li style="margin: 0;"><a class="toggle">Sword</a>
                  <ul class="toggle-items">
                    <?php
                      require_once 'Dao.php';
                      $dao = new Dao();
                      $weapons = $dao->getWeapons("Sword");

                      foreach ($weapons as $weapon) {
                        if ($_SESSION['currentWeapon'] == htmlspecialchars($weapon['name'])) {
                          echo
                          "<li><a class='sidenav-button active' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                            "<div class='board' style='padding: 0;'>" .
                              "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                            "<div class='nameblock2'>" .
                              "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                              "</div>" .
                            "</a></li>";
                        } else {
                            echo
                            "<li><a class='sidenav-button' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                              "<div class='board' style='padding: 0;'>" .
                                "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                              "<div class='nameblock2'>" .
                                "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                                "</div>" .
                              "</a></li>";
                        }
                      }
                    ?>
                  </ul>
                </li>

                <li style="margin: 0;"><a class="toggle">Claymore</a>
                  <ul class="toggle-items">
                    <?php
                      require_once 'Dao.php';
                      $dao = new Dao();
                      $weapons = $dao->getWeapons("Claymore");

                      foreach ($weapons as $weapon) {
                        if ($_SESSION['currentWeapon'] == htmlspecialchars($weapon['name'])) {
                          echo
                          "<li><a class='sidenav-button active' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                            "<div class='board' style='padding: 0;'>" .
                              "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                            "<div class='nameblock2'>" .
                              "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                              "</div>" .
                            "</a></li>";
                        } else {
                            echo
                            "<li><a class='sidenav-button' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                              "<div class='board' style='padding: 0;'>" .
                                "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                              "<div class='nameblock2'>" .
                                "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                                "</div>" .
                              "</a></li>";
                        }
                      }
                    ?>
                  </ul>
                </li>
                <li style="margin: 0;"><a class="toggle">Polearm</a>
                  <ul class="toggle-items">
                    <?php
                      require_once 'Dao.php';
                      $dao = new Dao();
                      $weapons = $dao->getWeapons("Polearm");

                      foreach ($weapons as $weapon) {
                        if ($_SESSION['currentWeapon'] == htmlspecialchars($weapon['name'])) {
                          echo
                          "<li><a class='sidenav-button active' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                            "<div class='board' style='padding: 0;'>" .
                              "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                            "<div class='nameblock2'>" .
                              "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                              "</div>" .
                            "</a></li>";
                        } else {
                            echo
                            "<li><a class='sidenav-button' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                              "<div class='board' style='padding: 0;'>" .
                                "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                              "<div class='nameblock2'>" .
                                "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                                "</div>" .
                              "</a></li>";
                        }
                      }
                    ?>
                  </ul>
                </li>
                <li style="margin: 0;"><a class="toggle">Bow</a>
                  <ul class="toggle-items">
                    <?php
                      require_once 'Dao.php';
                      $dao = new Dao();
                      $weapons = $dao->getWeapons("Bow");

                      foreach ($weapons as $weapon) {
                        if ($_SESSION['currentWeapon'] == htmlspecialchars($weapon['name'])) {
                          echo
                          "<li><a class='sidenav-button active' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                            "<div class='board' style='padding: 0;'>" .
                              "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                            "<div class='nameblock2'>" .
                              "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                              "</div>" .
                            "</a></li>";
                        } else {
                            echo
                            "<li><a class='sidenav-button' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                              "<div class='board' style='padding: 0;'>" .
                                "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                              "<div class='nameblock2'>" .
                                "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                                "</div>" .
                              "</a></li>";
                        }
                      }
                    ?>
                  </ul>
                </li>
                <li style="margin: 0;"><a class="toggle">Catalyst</a>
                  <ul class="toggle-items">
                    <?php
                      require_once 'Dao.php';
                      $dao = new Dao();
                      $weapons = $dao->getWeapons("Catalyst");

                      foreach ($weapons as $weapon) {
                        if ($_SESSION['currentWeapon'] == htmlspecialchars($weapon['name'])) {
                          echo
                          "<li><a class='sidenav-button active' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                            "<div class='board' style='padding: 0;'>" .
                              "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                            "<div class='nameblock2'>" .
                              "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                              "</div>" .
                            "</a></li>";
                        } else {
                            echo
                            "<li><a class='sidenav-button' href='#" . htmlspecialchars($weapon['name']) . "' name='" . htmlspecialchars($weapon['name']) . "'>" .
                              "<div class='board' style='padding: 0;'>" .
                                "<img class='image' src='" . htmlspecialchars($weapon['img']) . "' style='width: 40px;' alt=''></div>" .
                              "<div class='nameblock2'>" .
                                "<h4>" . htmlspecialchars($weapon['name']) . "</h4>" .
                                "</div>" .
                              "</a></li>";
                        }
                      }
                    ?>
                  </ul>
                </li>

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
      <a href="/about"> About </a>
      <a href="/contact"> Contact </a>
      <a href="/disclaimer"> Disclaimer </a>
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
    <script src="/js/weapon_nav.js"></script>
    <script>
      $(function() {
        $(".toggle").click(function() {
          if ($(this).siblings("ul").css('max-height') == '0px') {
            $(this).siblings("ul").css({
              'transform' : 'scaleY(1)',
              'max-height' : '500px',
              'transition' : '0.5s'
            });
          } else {
            $(this).siblings("ul").css({
              'max-height' : '0',
              'transform' : 'scaleY(0)',
              'transition' : '0.5s'
            });
          }
        });
      });
    </script>
</body>
</html>
