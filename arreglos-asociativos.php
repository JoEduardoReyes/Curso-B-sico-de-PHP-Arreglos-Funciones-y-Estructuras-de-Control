<?php

// $edades = array(
//   "carlos" => 18, "MsMichi" => 20, "Juan" => 40
// );

// echo "La edad de MsMichi es " . $edades["MsMichi"];

// $cafes = array(
//   "Capuchino" => 50,
//   "Latter" => 49,
//   "American" => 70
// );

// echo "El precio del cafe americano es {$cafes["American"]} dolares";

$colegios = array(
  "Guillermo Putzeys", "La patria", "Sor Juana"
);

$personas = array(
  "Carlos" => array(
    "Edad" => 20,
    "Apellido" => "Santana",
    "Colegio" => $colegios[0]
  ),
    "Michi" => array(
    "Edad" => 18,
    "Apellido" => "Michisancio",
    "Colegio" => $colegios[1]
  ),
);


echo "La informacion de Michi es: Edad: " . $personas['Michi']['Edad'] . " Apellido: " . $personas['Michi']['Apellido'] . " y estudio en " . $personas['Michi']['Colegio'] . "\n";

var_dump($personas['Michi']['Colegio'] === $colegios[1]);