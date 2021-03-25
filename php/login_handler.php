<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  require_once 'Dao.php';
  $dao = new Dao();

  $_SESSION['form_data'] = $_POST;
header('Location: /index.php');
    exit;
 
 
