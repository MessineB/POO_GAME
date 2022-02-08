<?php

use App\Hero;
use App\BonusHP;
use App\Bonusarmor;
use App\Ennemy;

require 'vendor/autoload.php';

$var = new Hero;
$herohp = $var->hhp();
echo $herohp;

$bon = new BonusHP;
$bon->gainhp();

$ok = new Bonusarmor;
$ok->gainarmor();

$test = new Minion;
$aff = $test->statminion();