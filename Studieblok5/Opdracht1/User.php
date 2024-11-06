<?php
class User {
    public $voornaam;
    protected $achternaam;
    private $wachtwoord;
    private $email;

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

    public function setWachtwoord($wachtwoord) {
        $this->wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);
    }

    public function checkWachtwoord($wachtwoord) {
        return password_verify($wachtwoord, $this->wachtwoord);
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
}
?>
