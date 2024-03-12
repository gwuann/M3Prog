<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $namen = ["ik","ik2","ik3","ik4","ik5"];
    echo count ($namen), '<br>'; 
    sort($namen); 
    print_r($namen);
    array_pop($namen);
    array_push($namen, "ik100");
    $namen[] = "ik200";
    print_r($namen);
    $namen_tekst = implode(' >> ', $namen);
    print_r($namen_tekst);
    $epic_tekst = explode(" << ", $namen_tekst);
    print_r($epic_tekst);
    ?>
</body>
</html>