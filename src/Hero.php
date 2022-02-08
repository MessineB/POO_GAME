<?php

 namespace App; 
class Hero {
    public $healthpoint = 200;
    public $damage = 15;
    public $armor = 0;

    public function herohp() {
        return $this->healthpoint;
    }
   }
