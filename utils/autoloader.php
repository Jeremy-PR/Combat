<?php

spl_autoload_register(function ($className) {
    // Base directory (src)
    $baseDir = __DIR__ . '/../src/';
    
    // Déterminer le répertoire en fonction du suffixe du nom de la classe
    switch (true) {
        case substr($className, -10) === 'Repository':
            $directory = 'Repositories';
            break;
        case substr($className, -7) === 'Manager':
            $directory = 'Managers';
            break;
        case substr($className, -6) === 'Mapper':
            $directory = 'Mappers';
            break;
        case substr($className, -8) === 'Contract':
            $directory = 'Interfaces';
            break;
        default:
            $directory = 'Entities';
            break;
    }

    // Construire le chemin complet du fichier
    $file = $baseDir . $directory . '/' . $className . '.php';

    // Charge le fichier si trouvé
    if (file_exists($file)) {
        require $file;
    }
});


// Explication simple :
// Fonctionnement :

// La fonction spl_autoload_register() enregistre une fonction anonyme qui est appelée chaque fois qu'une classe est instanciée mais qu'elle n'est pas encore incluse dans le code.
// Découverte des fichiers de classe :

// La fonction détermine d'abord le répertoire où se trouve la classe en fonction de son nom.
// Si le nom de la classe finit par Repository, elle cherche dans le dossier Repositories.
// Si le nom de la classe finit par Manager, elle cherche dans le dossier Managers.
// Si le nom de la classe finit par Mapper, elle cherche dans le dossier Mappers.
// Si le nom de la classe finit par Contract, elle cherche dans le dossier Interfaces.
// Pour toutes les autres classes, elle les cherche dans le dossier Entities.
// Chargement des fichiers :

// Une fois le répertoire déterminé, le fichier de la classe est construit avec le chemin relatif à partir du dossier src/, et il est inclus avec require si le fichier existe.
// En résumé :
// Autoloading : C'est une technique qui permet de charger automatiquement les classes sans avoir à les inclure manuellement partout dans ton code.
// Dans ce cas précis, l'autoloader facilite l'inclusion des fichiers des classes en fonction de leurs noms et de leur répertoire.
// Cela rend ton code plus propre et maintenable en évitant les include ou require manuels à chaque fois que tu utilises une nouvelle classe.

// Si tu as d'autres questions ou que tu veux que je t'explique un autre fichier, n'hésite pas !














