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
            <div class="row">
                  <div class="col text-center">
                        <p class="text-danger fs-1">
                              <?php
                              echo $_SESSION['password'];
                              ?>
                        </p>

                        <form action="">
                              <button type="submit" class="btn btn-primary ms-3" name="return" value="true">Clicca per tornare indietro</button>
                        </form>

                        <?php
                        if (isset($_GET['return'])) {

                              header('Location: ./index.php');
                        }
                        ?>
                  </div>
            </div>
      </div>

</body>

</html>