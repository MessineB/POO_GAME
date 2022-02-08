<?php
// J'appelle mes class 
use App\Hero;
use App\Minion;
use App\Chefminion;
use App\Lieutenantminion;

require 'vendor/autoload.php';

// Je recupere mes class dans des variables
$hero = new Hero;
$chef = new Chefminion;
$minion = new Minion;
$lieutenant = new Lieutenantminion;

// Fonction qui fait le calcul des degats que le hero prend , L'attaquant est a mettre en paramettre.
$hero->combat($chef->damage());

// Bonus armure pour le hero
$hero->bonusarmor();

// Bonus hp pour le hero
$hero->bonushp();

// PARTIE HTML + JS
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game POO</title>
</head>
<body>
    <script>
        var herojs = <?php echo json_encode($hero); ?>;
         console.log(herojs);
    </script>
</body>
</html>