<?php
  session_start();
  if (isset($_SESSION['currentChar']) && isset($_POST["currentChar"])) {
    $_SESSION['currentChar'] = $_POST["currentChar"];
  } else if (!isset($_SESSION['currentChar'])) {
    $_SESSION['currentChar'] = "Albedo";
  }
  header('Location: /php/character.php');
  exit;
