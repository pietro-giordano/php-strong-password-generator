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
            <div class="row">
                  <div class="col text-center">

                        <h1>Password Generator</h1>

                        <p>Inserisci numero di caratteri su cui creare una password.</p>

                        <form action="" method="GET">
                              <input type="number" name="numberOfCharacter" id="numberOfCharacter">
                              <button type="submit">Crea</button>
                        </form>

                        <p>
                              <?php
                              function randomPassword()
                              {
                                    $characther = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&?=-_';
                                    $password = [];
                                    for ($i = 0; $i < $_GET['numberOfCharacter']; $i++) {
                                          $n = rand(0, strlen($characther) - 1);
                                          $password[] = $characther[$n];
                                    }
                                    return implode($password);
                              }
                              echo randomPassword();
                              ?>
                        </p>

                  </div>
            </div>
      </div>


</body>

</html>