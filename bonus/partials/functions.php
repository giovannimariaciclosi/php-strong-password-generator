<?php 

// funzione per generare una password random (di minimo 4 caratteri) che include un numero, una lettera minuscola, una lettera maiuscola ed un caratttere speciale
function randomPasswordGenerator($length) {

  $password = '';
  $passwordSets = ['1234567890', '%^&@*#(){}', 'ABCDEFGHJKLMNPQRSTUVWXYZ', 'abcdefghjkmnpqrstuvwxyz'];

  // prendo caratteri random
  foreach ($passwordSets as $passwordSet) {
      $password .= $passwordSet[array_rand(str_split($passwordSet))];
  }

  // password di lunghezza $length
  while (strlen($password) < $length) {
      $randomSet = $passwordSets[array_rand($passwordSets)];
      $password .= $randomSet[array_rand(str_split($randomSet))];
  }

  // restituisco il risultato
  return $password;
};

// prendo la lunghezza della password scelta dall'utente tramite il form
$passwordLength = $_GET["passwordlength"] ?? false;

$passwordGenerated = randomPasswordGenerator($passwordLength);
