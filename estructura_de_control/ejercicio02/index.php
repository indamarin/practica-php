<?php

$nota = rand(0,10);

if ($nota >=0 && $nota < 5){
    echo "Tu nota es un $nota por lo cual tienes un insuficiente";
}else if ($nota >= 5 && $nota < 6){
    echo "Tu nota es un $nota por lo cual tienes un suficiente";
}else if ($nota >= 6 && $nota < 7){
    echo "Tu nota es un $nota por lo cual tienes un bien";
}else if ($nota >= 7 && $nota < 9){
    echo "Tu nota es un $nota por lo cual tienes un notable";
}else if ($nota >=9 && $nota <=10){
    echo "Tu nota es un $nota por lo cual tienes un sobresaliente";
}else{
    echo "Nota no valida";
}

?>