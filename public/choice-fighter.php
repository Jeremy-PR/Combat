<?php
include_once '../utils/autoloader.php';

$fighterRepository = new FighterRepository();
$fighters = $fighterRepository->findAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedFighterId = $_POST['fighter']; // ID du combattant sélectionné
    $selectedFighter = $fighterRepository->findById($selectedFighterId); // Trouver le combattant sélectionné
    echo "Vous avez choisi le combattant : " . $selectedFighter->getFightername();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir un Combattant</title>
</head>
<body>

<h1>Choisissez un combattant parmi les prédéfinis</h1>

<form action="fighter.php" method="POST">
    <label for="fighter">Sélectionner un combattant :</label>
    <select name="fighter" id="fighter" required>
        <option value="">-- Choisir un combattant --</option>
        <?php foreach ($fighters as $fighter): ?>
            <option value="<?= $fighter->getId() ?>"><?= htmlspecialchars($fighter->getFightername()) ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Choisir</button>
</form>

</body>
</html>
