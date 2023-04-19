<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong Password Generator</title>
</head>
<body>

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

    // stampo il risultato
    echo $password;
  };

  // randomPasswordGenerator(100);


  ?>

  <h1>Strong Password Generator</h1>
</body>
</html>
