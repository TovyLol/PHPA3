<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$user = new User("Jasper");

$user->setAchternaam("Vergeten");
$user->setEmail("jasper@example.com");
$user->setWachtwoord("sterkwachtwoord123");

echo "Voornaam: " . $user->getVoornaam() . "<br>";
echo "Achternaam: " . $user->getAchternaam() . "<br>";
echo "Email: " . $user->getEmail() . "<br>";

$ingevoerdWachtwoord = "sterkwachtwoord123";
if ($user->checkWachtwoord($ingevoerdWachtwoord)) {
    echo "Wachtwoord is correct.<br>";
} else {
    echo "Wachtwoord is onjuist.<br>";
}
?>
