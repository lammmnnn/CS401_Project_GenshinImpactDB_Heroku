<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  require "/php/Dao.php";
  
  header('Location: /php/Dao.php');
    exit;
 
