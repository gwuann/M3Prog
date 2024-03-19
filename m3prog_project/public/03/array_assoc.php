<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $assocArray = ['dag' => 'graden','maandag' => '14','dinsdag' => '11','woensdag' => '9','donderdag' => '10','vrijdag' => '13','zaterdag' => '7','zondag' => '11'];
    print_r($assocArray)
    ?>
    <table>
        <tr>
            <td>Dag</td>
            <td><?php echo $assocArray['dag'];?></td>
        </tr>
        <tr>
            <td>Maandag</td>
            <td><?php echo $assocArray['maandag'];?></td>
        </tr>
        <tr>
            <td>Dinsdag</td>
            <td><?php echo $assocArray['dinsdag'];?></td>
        </tr>
        <tr>
            <td>Woensdag</td>
            <td><?php echo $assocArray['woensdag'];?></td>
        </tr>
        <tr>
            <td>Donderdag</td>
            <td><?php echo $assocArray['donderdag'];?></td>
        </tr>
        <tr>
            <td>Vrijdag</td>
            <td><?php echo $assocArray['vrijdag'];?></td>
        </tr>
        <tr>
            <td>Zaterdag</td>
            <td><?php echo $assocArray['zaterdag'];?></td>
        </tr>
        <tr>
            <td>Zondag</td>
            <td><?php echo $assocArray['zondag'];?></td>
        </tr>
    </table>
</body>
</html>