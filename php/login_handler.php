<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  require_once '../api/Dao.php';
  $dao = new Dao();

  $_SESSION['form_data'] = $_POST;
  $_SESSION['authenticated'] = $dao->loginMatch($username, $password);

  if ($_SESSION['authenticated']) {
    header('Location: /api/index.php');
    exit;
  } else {
    $_SESSION['loginError'] = true;
    header('Location: /api/login.php');
    exit;
  }
