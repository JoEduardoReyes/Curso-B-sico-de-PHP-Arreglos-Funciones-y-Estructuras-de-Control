<?php

$michis_list = array(
  "Michiduardo" => array(
    "color" => "gris",
    "ocupacion" => "desarrollador",
    "comida" => array(
      "favorita" => "pescado",
      "rechazada" => "brocoli",
    )
  ),
    "Michiberto" => array(
    "color" => "blanco",
    "ocupacion" => "maestro",
    "comida" => array(
      "favorita" => "res",
      "rechazada" => "papas",
    )
  )
);

var_dump($michis_list["Michiduardo"]["comida"]["favorita"]);