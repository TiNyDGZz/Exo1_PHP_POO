<?php
class Personnage {

    private $_lifeLevel = 100;
    private $_strenght = 20;

    // GETTERS
    public function getLifeLevel() {
        return $this->_lifeLevel;
    }

    public function getStrenght() {
        return $this->_strenght;
    }


    // SETTERS
    public function setLifeLevel($lifeLevel) {
        if(isset($lifeLevel) && !empty($lifeLevel)) {
            $this->_lifeLevel = $lifeLevel;
        }
    }

    public function setStrenght($strenght) {
        if(isset($strenght) && !empty($strenght)) {
            $this->_strenght = $strenght;
        }
    }
    public function setPerso($perso) {
        if(isset($perso) && !empty($perso)) {
            $this->_perso = $perso;
        }
    }

    // Attaquer
    public function _attack() {
        echo $this-> _strenght;
    }

    // Perdre vie
    public function _looseLife($forceDuCoup) {
        $this->_lifeLevel = $this->_lifeLevel - $forceDuCoup;
    }

}

?>