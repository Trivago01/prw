<?php 

$v = readline();


if (($v <= 100) && ($v >= 0)) {
if (($v >= 0) and ($v <= 25)) {
    echo "Intervalo [0,25]\n";
}
if (($v > 25) and ($v <= 50)) {
    echo "Intervalo (25,50]\n";
}
if (($v > 50) and ($v <= 75)) {
    echo "Intervalo (50,75]\n";
}
if (($v > 75) and ($v <= 100)) {
    echo "Intervalo (75,100]\n";
}
} 
else {
    echo "Fora de intervalo\n";
}


?>