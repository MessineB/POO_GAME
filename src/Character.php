<?php
namespace App;

class Character {
    public $hp;
    public $damage;

    public function hp() {
        return $this->hp;
    }

    public function damage() {
        return $this->damage;
    }

    public function combat($damage) {
        $this->hp = $this->hp - $damage;
    }
}