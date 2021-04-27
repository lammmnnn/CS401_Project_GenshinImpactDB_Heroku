<?php
  session_start();
  if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
     header('Location: login.php');
     exit;
  }
?>
<html>
  <head>
    <title>Weapons | Genshin Impact Database | XLK</title>
    <link rel="shortcut icon" type="image/jpg" href="/img/favicon.ico">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/comment.js"></script>
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
    <h1>Post an Article</h1>
    <form method="post" action="comment_handler.php" enctype="multipart/form-data">
      <div class="input_box">
        <label for="name">Article's Name: </label>
        <input value="<?php echo isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>" type="text" id="name" name="name" required="">
      </div>
      <div class="input_box">
        <label for="text">Text:</label>
        <input value="<?php echo isset($_SESSION['form_data']['comment']) ? $_SESSION['form_data']['comment'] : ''; ?>" type="text" id="comment" name="comment" required="">
      </div>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
