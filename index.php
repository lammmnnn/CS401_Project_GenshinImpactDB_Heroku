<!DOCTYPE php>
<?php
  session_start();
?>

<html>
<head>
    <title>Genshin Impact Database | XLK</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="topnav">
    <div class="logo">
      <a href="index.php"><img src="/img/mainlogo2.png" height="64" alt=''></a>
    </div>
    <h2>Database by <span style="color: #007BEF;">XLK</span></h2>
    <div class="loginbutton<?php echo isset($_SESSION['form_data'])
     ? ' dropdown'  : '' ; ?>">
    <a <?php echo isset($_SESSION['form_data'])
     ? 'style="text-decoration: underline;">' . $_SESSION['form_data']['username']
      : 'href="/php/login.php">Log In' ; ?></a>
    <div class="dropdown-content">
      <a href="/php/user_setting.php">Profile Setting</a>
      <a href="/handler/logout_handler.php">Log out</a>
    </div>
    </div>
  </div>
  <div id="navbar">
    <div class="items">
      <a class="button first active">HOME</a>
      <div class="dropdown">
        <a class="button">CHARACTERS</a>
        <div class="dropdown-content">
          <a href="/php/pcharacter.php">Playable Characters</a>
          <a href="/php/ucharacter.php">Unreleased Characters</a>
        </div>
      </div>
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

    <div class="search">
      <input type="search" placeholder="Search">
      <label class="icon">
        <span class="fas fa-search"></span>
      </label>
    </div>

  </div>
  <main>
  <div>


  </div>
  </main>

  <div class="footer">
    <p>Footer</p>
  </div>

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
