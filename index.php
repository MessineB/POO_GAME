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

// $hero->combat($chef->damage());
// $minion->combat($hero->damage());

// Fonction qui me donne un nombre aleatoire entre le premier et le second nombre.
$random = random_int(1,5);

// Combat contre le boss en 5 tours

echo "<strong> Combat contre Chef minion </strong> <br> <br>";

for ($tour=1 ; $tour < 6 ; $tour++) 
{
    $random = random_int(1,4);

    // Critique du hero
    if ( $random == 1 ) {
        echo "COUP CRITIQUE ! <br>  ";
        $chef->combat(5*$hero->damage());
        echo "Le chef a desormais : ", $chef->hp ," hp <br>"; 
        $hero->combat($chef->damage());
        echo "Notre hero a desormais : ", $hero->hp , " hp <br> <br>";
        
    } 
    // Bonus hp;
    if ( $random == 2 ) {
        $hero->bonushp();
        echo "GAIN D'ARMURE ET COMBAT <br>";
        $chef->combat($hero->damage());
        echo "Le chef a desormais : ", $chef->hp ," hp <br>"; 
        $hero->combat($chef->damage());
        echo "Notre hero a desormais : ", $hero->hp , " hp <br> <br>";
       
    }
    // Bonus armor
    if ( $random == 3 ) {
        echo "GAIN D'ARMURE ET COMBAT <br>";
        $hero->bonusarmor();
        $chef->combat($hero->damage());
        echo "Le chef a desormais : ", $chef->hp ," hp <br>"; 
        $hero->combat($chef->damage());
        echo "Notre hero a desormais : ", $hero->hp , " hp <br> <br>";
    }
    // Rien de particulier
    if ( $random == 4 ) {
        echo "ECHANGE DE COUP AVEC LE BOSS <br>";
        $chef->combat($hero->damage());
        echo "Le chef a desormais : ", $chef->hp ," hp <br>"; 
        $hero->combat($chef->damage());
        echo "Notre hero a desormais : ", $hero->hp , " hp <br> <br>";
    }

    // If pour la victoire et la defaite
    
    if ( $chef->hp <= 0) {
        echo "<strong> Victoire ! </strong><br>";
        $hero->hp = 200;
        $tour=500;
    }
    if ( $hero->hp <= 0) {
        echo "<strong> Mort du hero ... Rip </strong><br>";
        $tour=500;
    }
}


// Bonus armure pour le hero
//$hero->bonusarmor();

// Bonus hp pour le hero
//$hero->bonushp();

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