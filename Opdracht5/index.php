<?php
class User {
    private $voornaam;
    private $achternaam;
    private $geboortedatum;

    public function __construct($voornaam) {
        $this->voornaam = $voornaam;
    }

    public function getVoornaam() {
        return $this->voornaam;
    }

    public function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }


    public function getAchternaam() {
        return $this->achternaam;
    }

    public function setAchternaam($achternaam) {
        $this->achternaam = $achternaam;
    }


    public function getGeboortedatum() {
        return $this->geboortedatum;
    }

    public function setGeboortedatum($geboortedatum) {
        $this->geboortedatum = $geboortedatum;
    }
}

$user = new User("Jasper");

$user->setAchternaam("Brilleman");
$user->setGeboortedatum("22-09-2006");

echo "Voornaam: " . $user->getVoornaam() . "<br>";
echo "Achternaam: " . $user->getAchternaam() . "<br>";
echo "Geboortedatum: " . $user->getGeboortedatum() . "<br>";
?>
