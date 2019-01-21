<?php

//Generamos un numero aleatorio entre 1 y 10

$numero = rand(0,1);

if ($numero == 0){
    echo "<img src=\"imagen/cara.jpg\">";
} else {
    echo "<img src=\"imagen/cruz.jpg\">";
}

?>