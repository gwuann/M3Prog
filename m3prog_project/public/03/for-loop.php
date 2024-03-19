<?php
$pokemons = ["charmander", "squirtle", "bulbasaur","caterpie","butterfree"];
$images = ["https://assets.pokemon.com/assets/cms2/img/pokedex/detail/004.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/007.png", "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png","https://assets.pokemon.com/assets/cms2/img/pokedex/detail/010.png","https://assets.pokemon.com/assets/cms2/img/pokedex/detail/012.png"];
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
    for ($i = 0; $i < count($pokemons); $i++) {
        echo "<h1>" . $pokemons[$i] . "</h1>";
        echo "<img src='" . $images[$i] . "' alt='" . $pokemons[$i] . "'><br>";
    }
?>
</body>
</html>