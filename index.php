<?php 
  include_once __DIR__ . '/functions.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>Strong Password Generator</h1>
      <h2>Genera una password sicura</h2>
      <?php if (isset($password)) { ?>
        <div class="alert alert-success" role="alert">
          La tua password è: <?= $password; ?>
        </div>
      <?php } ?>
      <form method="get">
        <div class="mb-3 container-password">
          <label for="length" class="form-label">Lunghezza password:</label>
          <input type="number" class="form-control" id="length" name="length" min="1" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <a href="\php-strong-password-generator" type="submit" class="btn btn-secondary">Annulla</a>
      </form>
    </div>
  </body>
</html>