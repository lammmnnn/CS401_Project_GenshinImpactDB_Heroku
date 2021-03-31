<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  require_once '../php/Dao.php';
  $dao = new Dao();

  $_SESSION['form_data'] = $_POST;
  $_SESSION['authenticated'] = $dao->loginMatch($username, $password);

  if ($_SESSION['authenticated']) {
    unset($_SESSION['form_data']);
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $dao->getUser($username)['email'];
    header('Location: /index.php');
    exit;
  } else {
    $_SESSION['loginError'] = true;
    header('Location: /php/login.php');
    exit;
  }
