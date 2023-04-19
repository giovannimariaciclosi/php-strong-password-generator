<?php

include_once './partials/functions.php';

session_start();


echo "La tua password è:<br><br>" . $_SESSION['password'];

// if(!empty($_SESSION['passwordlength'])) {
//   echo "La tua password è: " . $_SESSION['password'];
// }

?>
<br><br><hr>
<a href="./index.php">Torna indietro</a>