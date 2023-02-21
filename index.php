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
                              <div>
                                    <label for="numberOfCharacter" class="form-label">Inserisci lunghezza password da generare</label>
                                    <input type="number" class="form-control" name="numberOfCharacter" id="numberOfCharacter">
                              </div>

                              <div class="mt-3">
                                    <div>Selezionare caratteri con cui formare la password</div>

                                    <div>
                                          <input class="form-check-input" type="checkbox" value="1" id="character" name="characters">
                                          <label class="form-check-label" for="character">Lettere</label>
                                    </div>

                                    <div>
                                          <input class="form-check-input" type="checkbox" value="1" id="number" name="numbers">
                                          <label class="form-check-label" for="number">Numeri</label>
                                    </div>

                                    <div>
                                          <input class="form-check-input" type="checkbox" value="1" id="specialCharacter" name="specialCharacters">
                                          <label class="form-check-label" for="specialCharacter">Caratteri speciali</label>
                                    </div>
                              </div>

                              <button type="submit" class="btn btn-primary mt-4">Crea</button>
                        </form>

                        <?php
                        if (isset($_GET['numberOfCharacter'])) {
                              if ($_GET['numberOfCharacter'] != '' && (isset($_GET['characters']) || isset($_GET['numbers']) || isset($_GET['specialCharacters']))) {

                                    include __DIR__ . '/function.php';
                                    $_SESSION['password'] = randomPassword();
                                    header('Location: ./password.php');
                              } else {

                                    echo '<p class="mt-4 fs-3 text-danger">Valore mancante</p>';
                              }
                        }
                        ?>
                  </div>
            </div>
      </div>


</body>

</html>