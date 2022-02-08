<?php

namespace App;
class Minion {
    public $minionhp = 10;
    public $minionattack = 10;

    public function attackminion(){
        return $this->minionattack;
    }

}

class Chefmninion{
    public $chefminionhp = 100;
    public $chefminionattack = 100;
}