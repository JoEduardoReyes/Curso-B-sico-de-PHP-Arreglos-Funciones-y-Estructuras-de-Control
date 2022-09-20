<?php

$usernames = array(
  "Pepito123", "MrMIchi", "RetaxMaster"
);

do {
  $username = readline("Por favor ingresa tu numero nombre de usuario: ");

} while ( in_array($username, $usernames) );