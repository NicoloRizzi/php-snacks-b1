<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Esercizio JSnack 2</title>
</head>
<body>
  <?php
    $data = $_GET;
    // check sulla presenza di parametri
    if( empty($data['name']) || empty($data['mail']) || empty($data['age']) ) {
      echo 'Errore parametri mancanti';
    }
    // check sulla lenght della chiave name
    elseif ( strlen ($data['name']) <= 3){
      echo 'Accesso negato';
    }
    // check sulla presenza di una @ e di un .
    elseif ( strpos($data['mail'], '@') === false || strpos($data['mail'], '.')== false) {
      echo 'Accesso negato';
    }
    // check sulla presenza di un numero
    elseif (!is_numeric($data['age'])) {
      echo 'Accesso negato';
    }
    else {
      echo 'Accesso riuscito';
    }
  ?>
</body>
</html>