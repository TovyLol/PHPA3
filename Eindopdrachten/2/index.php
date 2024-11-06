<?php
// alle files
require_once 'Kaarten.php';
require_once 'Veld.php';
require_once 'Spel.php';

session_start();


if (!isset($_SESSION['spel'])) {
    $_SESSION['spel'] = new Spel();
}

$spel = $_SESSION['spel'];

// flipper
if (isset($_GET['flip'])) {
    $index = (int)$_GET['flip'];
    $spel->flipKaart($index);
}
// resetter
if (isset($_GET['reset'])) {
    $spel->resetGame();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="game-container">
        <h1>Memory Game</h1>
        <div class="grid">
            <?php 
            $kaarten = $spel->getVeld()->getKaarten();
            foreach ($kaarten as $index => $kaart): ?>
                <div class="card">
                    <a href="?flip=<?= $index ?>">
                        <div class="card-content <?= $kaart->isTeZien() ? 'revealed' : 'hidden' ?>">
                            <?= $kaart->isTeZien() ? $kaart->getValue() : '*' ?>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="?reset=true" class="reset-button">Reset Game</a>
    </div>
</body>
</html>
