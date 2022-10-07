<?php

$possible_words = array(
  "Bebida", "Prisma", "Ala", "Dolor", "Telus", "Platzi", "Terremoto", "Usuario", "Gallo", "Dulce", "javaScript"
);

define("MAX_ATTEMPTS", 6);

echo "😺 Juego de ahorcado! \n\n";

// -------------------------------- inicializamos el juego --------------------------------

$choosen_word = $possible_words[rand(0, count($possible_words))];
$choosen_word = strtolower($choosen_word);
$word_lenght = strlen($choosen_word);
$discovered_letters = str_pad("", $word_lenght, "_");
$attemps = 0;

echo "Palabra de $word_lenght letras \n\n";
echo $discovered_letters . "\n\n";