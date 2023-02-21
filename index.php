<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Strong Password Generator</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

      <div class="container">
            <div class="row d-flex justify-content-center text-center">
                  <div class="col-4">

                        <h1>Password Generator</h1>

                        <form action="" method="GET">
                              <label for="numberOfCharacter" class="form-label">Inserisci lunghezza password da generare</label>
                              <div class="d-flex">
                                    <input type="number" class="form-control" name="numberOfCharacter" id="numberOfCharacter">
                                    <button type="submit" class="btn btn-primary ms-3">Crea</button>
                              </div>
                        </form>

                        <?php
                        if (isset($_GET['numberOfCharacter'])) {
                              if ($_GET['numberOfCharacter'] != '') {

                                    include __DIR__ . '/function.php';
                                    $_SESSION['password'] = randomPassword();
                                    header('Location: ./password.php');
                              } else {

                                    echo '<p>Inserire un valore</p>';
                              }
                        }
                        ?>
                  </div>
            </div>
      </div>


</body>

</html>