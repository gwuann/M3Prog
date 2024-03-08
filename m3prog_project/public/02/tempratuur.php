<?php

$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

$celsius =  22;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

$celsius =  22;
$kelvin = ($celsius + 273.15);
echo "{$kelvin}K graden Kelvin = {$celsius} graden Celsius. <br/>";

$kelvin =  22;
$celsius = ($kelvin - 273.15);
echo "{$celsius} graden Celsius = {$kelvin}K graden Kelvin. <br/>";

?>