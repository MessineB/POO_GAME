<?php

namespace App;
class Minion {
    public $minionhp = 10;
    public $minionattack = 10;

    public function statminion(){
        return $this->minionattack;
    }

}
class Lieutenantmninion{
    public $lieuteminionhp = 30;
    public $lieuteminionattack = 30;
}
class Chefmninion{
    public $chefminionhp = 100;
    public $chefminionattack = 100;
}