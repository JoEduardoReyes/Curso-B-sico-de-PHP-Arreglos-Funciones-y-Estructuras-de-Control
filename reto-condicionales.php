<?php

// el reto es preguntar al streamer si tiene suficiente dinero para retiralo

$donaciones_totales = readline("Por favor ingresa la cantidad de donaciones acumuladas: ");

if ($donaciones_totales >= 100) {
  echo "Puedes retirar el dinero";
} else {
  echo "Aun no tienes suficiente dinero para el retiro, las donaciones tienen que ser mayores a 100 USD para retirar el dinero";
}