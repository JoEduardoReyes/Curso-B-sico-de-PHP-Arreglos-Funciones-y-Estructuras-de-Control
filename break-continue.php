<?php

$tiendita_de_cafes = array(
  "American" => 20,
  "Latte" => 25,
  "Recalentado" => 10,
  "Capuchino" => 27.5,
  "Mocca" => 24
);


foreach ($tiendita_de_cafes as $cafe => $precio) {
  if ($cafe == "Recalentado") {
    continue;
  }
  echo "El cafe $cafe es muy rico\n";
}