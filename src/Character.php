<?php
namespace App;

class Character {
    public $hp;
    public $damage;
    public $armor;

    public function hp() {
        return $this->hp;
    }

    public function damage() {
        return $this->damage;
    }

    public function combat($damage) {
        if ( $this->armor <= 0 )
        { 
            $this->hp = $this->hp - $damage; 
        }
        else {
            $this->armor = $this->armor - $damage;
            if ( $this->armor <= 0)
            {  
                 $this->hp = $this->hp + $this->armor;
                echo "L'armure du hero a subi des degats et a explosé <br>";
            }
            else 
            {
                echo "L'armure du hero a subi des degats mais tiens encore le coup il reste encore", $this->armor, " point d'armure <br>";
            }
        }
    }
}