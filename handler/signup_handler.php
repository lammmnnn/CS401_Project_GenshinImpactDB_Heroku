<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  // check the email and password
  require_once '../api/Dao.php';
  $dao = new Dao();

  if ($dao->emailExist($email)) {
    $_SESSION['emailexist'] = true;
    $_SESSION['form_data'] = $_POST;
    header('Location: /api/signup.php');
    exit;
  } else if ($dao->userExist($username)) {
    $_SESSION['usernameexist'] = true;
    $_SESSION['form_data'] = $_POST;
    header('Location: /api/signup.php');
    exit;
  } else {
    $_SESSION['success'] = true;
    $dao->createUser($username, $password, $email);
    header('Location: /api/login.php');
    exit;
  }
