<?php
require_once 'Huis.php';
require_once 'TaxCalculator.php';

$intBelasting = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kamers = (int)$_POST['kamers'];
    $toiletten = (int)$_POST['toiletten'];
    $verwarming = isset($_POST['verwarming']) ? true : false;
    $adres = [
        (int)$_POST['huisnummer'],
        $_POST['straat'],
        $_POST['stad']
    ];
    $grond = (int)$_POST['grond'];
    $waarde = (int)$_POST['waarde'];

    $huis = new Huis($kamers, $toiletten, $verwarming, $adres, $grond, $waarde);

    $Belasting = new Belasting();
    $intBelasting = $Belasting->berekenBelasting($huis);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House Input Form</title>
</head>
<body>
    <h1>Enter House Details</h1>
    <form method="POST" action="">
        <label for="kamers">Aantal kamers:</label>
        <input type="number" name="kamers" id="kamers" required><br><br>

        <label for="toiletten">Aantal toiletten:</label>
        <input type="number" name="toiletten" id="toiletten" required><br><br>

        <label for="verwarming">Verwarming:</label>
        <input type="checkbox" name="verwarming" id="verwarming"><br><br>

        <label for="huisnummer">Huisnummer:</label>
        <input type="number" name="huisnummer" id="huisnummer" required><br><br>

        <label for="straat">Straat:</label>
        <input type="text" name="straat" id="straat" required><br><br>

        <label for="stad">Stad:</label>
        <input type="text" name="stad" id="stad" required><br><br>

        <label for="grond">Grond (m²):</label>
        <input type="number" name="grond" id="grond" required><br><br>

        <label for="waarde">Waarde (in hele euro's):</label>
        <input type="number" name="waarde" id="waarde" required><br><br>

        <input type="submit" value="Calculate Tax">
    </form>

    <?php if ($intBelasting !== null): ?>
        <h2>Te betalen belasting: €<?= htmlspecialchars($intBelasting) ?></h2>
    <?php endif; ?>
</body>
</html>
