<?php

include_once './partials/functions.php';

session_start();

$_SESSION['passwordlength'] = randomPasswordGenerator($passwordLength);


if(!empty($_SESSION['passwordlength'])) {
  echo "La tua password è: " . $_SESSION['passwordlength'];
}