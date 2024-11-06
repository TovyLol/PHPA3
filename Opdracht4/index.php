<?php
require_once 'print.php';

$user = new User("Jasper");
$user->setAchternaam("vergeten");
$user->setGeboortedatum("nog is vergeten");

echo "Voornaam: " . $user->getVoornaam() . "<br>";
echo "Achternaam: " . $user->getAchternaam() . "<br>";
echo "Geboortedatum: " . $user->getGeboortedatum() . "<br>";
?>
