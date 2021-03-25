<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  
  require_once "/php/Dao.php";
  
  header('Location: /php/login.php');
    exit;
  
