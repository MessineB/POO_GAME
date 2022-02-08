<?php

 namespace App; 
class Hero extends Character{
    public $armor = 0;
    public $bonusHP=50;
    public $bonusarmor=15;


    public function __construct() {
        $this->hp=200;
        $this->damage=15;
    }
    
    public function armor() {
        return $this->armor;
    }
   }
