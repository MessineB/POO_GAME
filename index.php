<?php

use App\Hero;
use App\Minion;
use App\Chefminion;
use App\Lieutenantmninion;

require 'vendor/autoload.php';

$Hero = new Hero;
$herohp = $Hero->hp();
$heroarmor = $Hero->armor();
echo $herohp;
echo $heroarmor;

$Minion = new Minion;
$attackminion = $Minion->damage();
$hpminion = $Minion->hp();
echo $attackminion;
echo $hpminion;

$chef = new Chefminion;
$chefhp = $chef->hp();
$chefattack = $chef->damage();

$Hero->combat($Minion->damage());
echo $Hero->hp();