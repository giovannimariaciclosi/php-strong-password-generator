<?php 

include_once './partials/functions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strong Password Generator</title>

  <!-- Stile Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>


  <div class="container">
    <h1>Strong Password Generator</h1>
    <hr class="pb-3">
  
    <form action="index.php" method="GET">
  
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Password lenght:</span>
        <input name="passwordlength" type="number" min="4" max="100" id="vote" step="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Min 4, Max 100">
        <button class="btn btn-primary" type="submit">Generate Password</button>
      </div>
  
    </form>

    <pre>
      <?php 

        // se passwordLenght è stata settata dall'utente, genero una password di quella lunghezza, altrimenti no.
        if($passwordLength) {
          randomPasswordGenerator($passwordLength);
        }

      ?>
    </pre>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
