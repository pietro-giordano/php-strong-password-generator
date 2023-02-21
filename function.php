<?php

function randomPassword()
{
      $character = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$%&?=-_';
      $password = [];
      for ($i = 0; $i < $_GET['numberOfCharacter']; $i++) {
            $n = rand(0, strlen($character) - 1);
            $password[] = $character[$n];
      }
      return implode($password);
}
