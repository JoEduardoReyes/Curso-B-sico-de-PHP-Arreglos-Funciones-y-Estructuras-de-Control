<?php

function getPokemon() {

  $numero_aleatorio = rand(1, 5);

  switch ($numero_aleatorio) {
    case 1:
      echo "pikachu ";
      break;
    case 2:
      echo "Charmander ";
      break;
    case 3:
      echo "Mewtwo ";
      break;
    default:
      echo "Lo siento, no hay pokemon para ti ";
  }
  echo $numero_aleatorio . "\n";
};

for ($i = 0; $i <20; $i++) {
  echo $i . " ";
  getPokemon();
}