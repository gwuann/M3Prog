<?php

$afstand = 1823; // KM
$literEuro95 = 1.89; // euro
$treinprijs = 60; // euro
$tankinhoud = 40; // liter
$liternodig = 122; // liter
$tanken = 3; // aantal keren
$autoprijs = $literEuro95 * $tankinhoud * $tanken;

if ($autoprijs > $treinprijs) {
    echo "Ik ga met de trein.";
} else {
    echo "Ik ga met de auto.";
}

?>