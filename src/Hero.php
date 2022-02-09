<?php

 namespace App; 
class Hero extends Character{
    public $bonushp=50;
    public $bonusarmor=15;

    public function __construct()
    {
        $this->hp=200;
        $this->damage=15;
    }
    
    public function bonusarmor() {
        $this->armor = $this->armor + $this->bonusarmor;
    }
    public function bonushp() {
        $this->hp = $this->hp + $this->bonushp;
    }
   }
