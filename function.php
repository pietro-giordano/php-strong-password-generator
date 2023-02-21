<?php



function randomPassword()
{
      $character = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $number = '1234567890';
      $special = '!$%&?=-_';
      $tot = '';

      if (isset($_GET['characters'])) {
            $tot .= $character;
      }

      if (isset($_GET['numbers'])) {
            $tot .= $number;
      }

      if (isset($_GET['specialCharacters'])) {
            $tot .= $special;
      }

      $password = [];
      for ($i = 0; $i < $_GET['numberOfCharacter']; $i++) {
            $n = rand(0, strlen($tot) - 1);
            $password[] = $tot[$n];
      }
      return implode($password);
}
