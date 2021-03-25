<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  

  $_SESSION['form_data'] = $_POST;
  $_SESSION['authenticated'] = true;

  if ($_SESSION['authenticated']) {
    header('Location: /php/index.php');
    exit;
  } else {
    $_SESSION['loginError'] = true;
    header('Location: /php/login.php');
    exit;
  }
