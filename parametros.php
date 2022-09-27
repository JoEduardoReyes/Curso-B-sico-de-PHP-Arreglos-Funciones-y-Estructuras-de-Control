<?php

function es_estudiante_legend($platzi_rank) {
  if ($platzi_rank >= 20000) {
    echo "Eres un estudiante Legend\n";
  } else {
    echo "Lo sentimos, aun no eres un estudiante Legend\n";
  }
}

es_estudiante_legend(readline("Cuantos puntos de Platzi Rank tienes: \n"));