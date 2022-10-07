<?php

// -------------------------------------- limpiar pantalla -------------------------------------------------

function clear() {

  if (PHP_OS == "Windows") {
    system("cls");
  } else {
    system("clear");
  }

}

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

do {

  echo "Palabra de $word_lenght letras \n\n";
  echo $discovered_letters . "\n\n";

  // -------------------------------- pedimos al usuario que escriba --------------------------------

  $player_letter = readline("Escriba una letra: ");
  $player_letter = strtolower($player_letter);

  if ( str_contains($choosen_word, $player_letter) ) {

    // verficamos todas las ocurrencias de esta letra para reemplazarla
    $offset = 0;
    while ( ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false ) {

      $discovered_letters[$letter_position] = $player_letter;
      $offset = $letter_position + 1;

    }

  } else {

    clear();
    $attemps++;
    echo "Letra incorrecta 😟. Te quedan " . (MAX_ATTEMPTS - $attemps) . " Intentos\n";
    sleep(2);
  }

} while ( $attemps < MAX_ATTEMPTS && $discovered_letters != $choosen_word );

if ($attemps < MAX_ATTEMPTS) {
  echo "Felicidades has adviinado la palabra! ☺ \n\n";
}
else {
  echo "Suerte para la proxima\n" . "La palabra es $choosen_word\n" . "Tu descubriste $discovered_letters\n";
}

sleep(2);

clear();