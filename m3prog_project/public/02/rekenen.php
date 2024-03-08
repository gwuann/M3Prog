<?php

$getal = 12345.67890;
$afgerond1 = ceil($getal);
echo "Afronden naar boven: $afgerond1 <br>";
$getal2 = number_format($getal, 2, '.', ',');
$afgerond2 = floor($getal);
echo "Afronden naar beneden: $afgerond2";

$random1 = rand();
$random2 = rand();
$random3 = rand();
$optelling = $random1 + $random2;
$resultaat = $optelling / $random3;
echo "Het resultaat is: $resultaat";

?>