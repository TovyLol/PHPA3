<?php
class User {
    public $voornaam;
    protected $achternaam;
    protected $geboortedatum;
    private $geheim;

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

    public function setGeheim($geheim) {
        $this->geheim = $geheim;
    }

    public function getGeheim() {
        return $this->geheim;
    }
}
?>
