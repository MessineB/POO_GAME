<?php

 namespace App; 
class Hero {
    public $healthpoint = 200;
    public $damage = 15;
    public $armor = 0;

    public function test() {
        return $this->healthpoint;
    }
   }
