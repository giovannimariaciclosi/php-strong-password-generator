<?php

include_once './partials/functions.php';

session_start();

$_SESSION['passwordlength'] = $passwordLength;
$_SESSION['password'] = $passwordGenerated;

echo "La tua password è: " . $passwordGenerated;

// if(!empty($_SESSION['passwordlength'])) {
//   echo "La tua password è: " . $_SESSION['password'];
// }