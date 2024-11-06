<?php
class Huis {
    // Properties of the house
    public $hoogte; // int
    public $kamers; // int
    public $toiletten; // int
    public $verwarming; // boolean
    public $adres; // list: int string string
    public $grond; // int
    public $waarde; // int

    public function __construct($kamers = 0, $toiletten = 0, $verwarming = false, $adres = [], $grond = 0, $waarde = 0) {
        $this->kamers = $kamers;
        $this->toiletten = $toiletten;
        $this->verwarming = $verwarming;
        $this->adres = $adres;
        $this->grond = $grond;
        $this->waarde = $waarde;
    }

    // hoogte huis
    public function setHoogte($hoogte) { 
        $this->hoogte = $hoogte; 
    }
    public function getHoogte() { 
        return $this->hoogte; 
    }

    // kamers huis
    public function setKamers($kamers) { 
        $this->kamers = $kamers; 
    }
    public function getKamers() { 
        return $this->kamers; 
    }

    // toiletten huis
    public function setToiletten($toiletten) { 
        $this->toiletten = $toiletten; 
    }
    public function getToiletten() { 
        return $this->toiletten; 
    }

    // boolean verwarming huis
    public function setVerwarming($verwarming) {
        $this->verwarming = $verwarming; 
    }
    public function getVerwarming() {
        return $this->verwarming; 
    }
    
    // adres info huis
    public function setAdres($adres) { 
        $this->adres = $adres; 
    }
    public function getAdres() { 
        return $this->adres; 
    }
    public function getHuisnummer() { 
        return $this->adres[0]; 
    }
    public function getStraat() { 
        return $this->adres[1];
    }
    public function getStad() { 
        return $this->adres[2]; 
    }
    
    // grond huis
    public function setGrond($grond) { 
        $this->grond = $grond; 
    }
    public function getGrond() { 
        return $this->grond; 
    }

    // waarde huis
    public function setWaarde($waarde) { 
        $this->waarde = $waarde; 
    }
    public function getWaarde() {
        return $this->waarde; 
    }
}
?>
