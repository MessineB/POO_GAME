<?php

use App\Hero;
use App\BonusHP;
use App\Bonusarmor;
use App\Attack;
require 'vendor/autoload.php';

$var = new Hero;
$var->test();

$bon = new BonusHP;
$bon->gainhp();

$ok = new Bonusarmor;
$ok->gainarmor();

$aie = new Attack;
$aie->aie();
