<?php

function obtenerHora() {
  $hoy = localtime();
  $hora = array(
    $hoy[2] - 8,
    $hoy[1],
  );
  return $hora;
}

echo "HOla! Me podrias decir la hora?\n";
echo "Claro! Son las " . obtenerHora()[0] . " con " . obtenerHora()[1] . "\n";