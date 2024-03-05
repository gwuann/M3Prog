<?php

$titel = "epic";
$url = "https://www.amsterdamsdagblad.nl/image/54003_104194_1200_1200.webp";
$titelafbeelding = "gwuann";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel;?></title>
</head>
<body>
    <section><?php echo $titel;?><section>
    <img src=<?php echo $url;?> alt="foto" width = "300" height = "300"> 
    <section>Auteur: <?php echo $titelafbeelding;?><section>
</body>
</html>