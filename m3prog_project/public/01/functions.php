<?php
$filename = 'M3PROG/m3prog_project/public/01/epic.php';

if (file_exists($filename)) {
    echo "$filename bestaat";
} else {
    echo "$filename bestaat niet";
}

?>


<?php
$string = "Heel lang verhaal";
$string = strtoupper($string);
echo $string;

?>

<?php
$deur = 'deur';
$sleutel   = 'sleutel';
$pos = strpos($deur, $sleutel);

if ($pos === false) {
    echo "The string '$sleutel' was not found in the string '$deur'";
} else {
    echo "The string '$sleutel' was found in the string '$deur'";
    echo " and exists at position $pos";
}
?>