<?php
  session_start();

    $_SESSION['currentMaterial'] = $_POST["currentMaterial"];

  header('Location: /php/material.php');
  exit;
