<?php

include_once './partials/functions.php';

session_start();

$_SESSION['passwordlength'] = $passwordLength;
$_SESSION['password'] = randomPasswordGenerator($passwordLength);

if(!empty($_SESSION['passwordlength'])) {
  echo "La tua password è: " . $_SESSION['password'];
}