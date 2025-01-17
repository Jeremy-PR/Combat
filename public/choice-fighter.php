<?php
include_once '../utils/autoloader.php';

// Charger tous les combattants
$fighterRepo = new FighterRepository();
$fighters = $fighterRepo->findAll();



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir un Combattant</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>
<body>

<h1>Choisissez un combattant parmi les prédéfinis</h1>

<form action="" method="POST">
    <label for="fighter">Sélectionner un combattant :</label>
    <select name="fighter" id="fighter" required>
        <option value="">-- Choisir un combattant --</option>
        <?php foreach ($fighters as $fighter): ?>
            <option value="<?= $fighter->getImage() ?>">
                <?= htmlspecialchars($fighter->getFightername()) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Choisir</button>
</form>

</body>
</html>
