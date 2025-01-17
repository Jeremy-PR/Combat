<?php
session_start();

// Si un héros est déjà créé, rediriger vers la page de combat
// if (isset($_SESSION['hero']) && !empty($_SESSION['hero'])) {
//     header('Location: ./fight.php');
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez votre héros</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>

    <header>
        <h1>Fight in the Garage</h1>
    </header>

    <div class="create-hero-section">
        <h2>Créez votre Héros</h2>

        <form action="../process/create-hero-process.php" method="POST" class="create-hero-form">
            <div class="tenor-gif-embed" data-postid="22274571" data-share-method="host" data-aspect-ratio="1.01911" data-width="50%">
                <a href="https://tenor.com/view/street-fighter-dudley-gif-22274571">Street Fighter Dudley Sticker</a>from <a href="https://tenor.com/search/street+fighter-stickers">Street Fighter Stickers</a>
            </div>
            <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            
            <label for="name">Nom de votre héros :</label>
            <input type="text" id="name" name="name" placeholder="Entrez un nom" required>

            <button type="submit" class="create-button">Créer</button>
        </form>
    </div>

</body>

</html>
