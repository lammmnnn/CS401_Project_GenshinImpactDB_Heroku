<?php
  session_start();
?>
<!DOCTYPE php>
<html>
<head>
    <title>Genshin Impact Database | XLK</title>
    <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body class="userauthen">
  <div class="topnav">
    <div class="logo">
      <a href="/php/index.php"><img src="/img/mainlogo2.png" height="50" alt=''></a>
    </div>
    <h2>Database by <span style="color: #007BEF;">XLK</span></h2>
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


  </div>
  <main>
  <div class="us-panel">
    <div class="content-header">
      <h6>Account Information</h6>
    </div>
    <div class="content-body">
      <p class="account-info-item">
        <span class="account-info-label">Username:</span>
        <span><?php echo $_SESSION['username']; ?></span>
        </p>
        <p class="account-info-item">
          <span class="account-info-label">Password:</span>

        </p>
        <p class="account-info-item">
          <span class="account-info-label">Email:</span>
          <span><?php echo $_SESSION['email']; ?></span>
        </p>
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

</body>
</html>
