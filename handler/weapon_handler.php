<?php
  session_start();

    $_SESSION['currentWeapon'] = $_POST["currentWeapon"];

  header('Location: /php/weapon.php');
  exit;
