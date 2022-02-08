<?php

use App\Hero;
use App\BonusHP;
use App\Bonusarmor;
use App\Attack;
use App\Ennemy;
require 'vendor/autoload.php';

$var = new Hero;
$armor = $var->test();
echo $armor;


$bon = new BonusHP;
$bon->gainhp();

$ok = new Bonusarmor;
$ok->gainarmor();

$aie = new Attack;
$aie->aie();
