document.addEventListener('DOMContentLoaded', function () {
    const combatLog = document.querySelector('.combat-log');
    let currentIndex = 0;  

    function showNextResult() {
     
        if (currentIndex < combatResults.length) {
        
            const p = document.createElement('p');
            p.textContent = combatResults[currentIndex];
            combatLog.appendChild(p);

      
            setTimeout(() => {
                p.classList.add('show');
            }, 50); 

      
            if (currentIndex > 0) {
                const previousParagraph = combatLog.querySelector('p');
                if (previousParagraph) {
                    previousParagraph.remove();
                }
            }

        
            currentIndex++;

          
            setTimeout(showNextResult, 1000); 
        }
    }

   
    showNextResult();
});


// Dans le script JavaScript que j'ai écrit, l'objectif est d'afficher les résultats du combat ligne par ligne, avec un petit délai entre chaque phrase pour donner l'impression que le combat se déroule en temps réel.

// Voici les étapes principales de ce que j'ai fait :

// Récupération des résultats : J'ai utilisé la fonction json_encode pour passer les résultats du combat de PHP à JavaScript sous forme de tableau. Cela permet de rendre chaque action du combat disponible côté client.

// Affichage des résultats : J'ai créé une fonction qui prend les résultats un par un et les affiche sur la page. À chaque fois qu'une phrase est affichée, je fais une pause avant d'afficher la suivante.

// Suppression de la phrase précédente : À chaque fois qu'une nouvelle phrase est affichée, je retire la phrase précédente de l'écran. Cela évite que tout le combat soit affiché en même temps, ce qui serait un peu trop chargé.

// Utilisation du setTimeout : J'ai utilisé setTimeout pour introduire un délai entre chaque phrase et setInterval pour afficher une phrase après un délai donné, créant ainsi une animation de texte où chaque phrase apparaît à son propre rythme.