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

$personas = array(
  "Carlos" => array(
    "Edad" => 20,
    "Apellido" => "Santana",
  ),
    "Michi" => array(
    "Edad" => 18,
    "Apellido" => "Michisancio",
  ),
);

echo "La informacion de Michi es: Edad: " . $personas['Michi']['Edad'] . " Apellido: " . $personas['Michi']['Apellido'];