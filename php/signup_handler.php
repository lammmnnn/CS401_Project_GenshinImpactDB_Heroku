<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  // check the email and password
  require_once '/php/Dao.php';
  $dao = new Dao();

  if ($dao->emailExist($email)) {
    $_SESSION['emailexist'] = true;
    $_SESSION['form_data'] = $_POST;
    header('Location: /php/signup.php');
    exit;
  } else if ($dao->userExist($username)) {
    $_SESSION['usernameexist'] = true;
    $_SESSION['form_data'] = $_POST;
    header('Location: /php/signup.php');
    exit;
  } else {
    $dao->createUser($username, $password, $email);
    header('Location: /php/login.php');
    exit;
  }
