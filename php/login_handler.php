<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  require_once '/php/Dao.php';
  $dao = new Dao();

  $_SESSION['form_data'] = $_POST;
  $_SESSION['authenticated'] = $dao->loginMatch($username, $password);

