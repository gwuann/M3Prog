<?php 
$automerken = ["mercedes","bmw","audi","volkswagen","porsche","kia"];
print_r($automerken);
var_dump($automerken);
echo $automerken[3];
echo $automerken[5];
echo count($automerken);
$automerken[] = "gepushed";
print_r($automerken);
sort($automerken);
echo implode('', $automerken);
?>
