<?php
$verbruik = ["wasmaschine1" => 100,"wasmaschine2" => 200,"wasmaschine3" => 300,"wasmaschine4" => 400,"wasmaschine5" => 500];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <?php
        $totaal = 0;
        foreach($verbruik as $key => $value){
            echo $key . "=" . $value;
            $totaal += $value;
        }
        echo "Totaal verbruik: " . $totaal . "KWH";
    ?>
    
</body>
</html>