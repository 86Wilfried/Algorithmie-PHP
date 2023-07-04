
<?php

// Le jeu du cul de chouette

// C'est un jeu de dés issu de l'univers de la série Kaamelott d'Alexandre Astier
// C'est, bien entendu, l'un des jeux préférés de Perceval.

// Le principe est, comme au Yams, de marquer des points en réussissant à créer des combinaisons avec ses dés.

// On lance 3 dés, et on peut obtenir les 5 combinaisons suivantes :

// "Chouette"           : 2 dés identiques
// "Cul de chouette"    : 3 dés identiques
// "Velute"             : 1 des trois dés est la somme des deux autres (ex : 6 4 2 ou 5 2 3)
// "Chouette velute"    : 2 dés identiques ET le troisième qui est la somme des deux autres (ex: 1 1 2, 2 2 4 ou 3 3 6)
// "La suite"           : suite de trois nombres (ex: 1 2 3, 2 3 4, ...)

// Je crée une fonction pour vérifier si les dés forment une combinaison donnée
function checkCombination($dé)
{
    sort($dé); // Trie les dés par ordre croissant
    // SI les valeurs de chaque dé est identique ALORS
    if ($dé[0] === $dé[1] && $dé[1] === $dé[2]) {
        // J'affiche
        return "Cul de chouette";
    // SINON SI Les valeurs du dé 1 est identique à celle du dé 2 OU dé 2 est identique à dé 3 ALORS
    } elseif ($dé[0] === $dé[1] || $dé[1] === $dé[2]) {
        // SI la somme de dé 1 ET dé 2 est idéntique à dé 3 ALORS
        if ($dé[0] + $dé[1] === $dé[2]) {
            // J'affiche
            return "Chouette velute";
        // SINON
        } else {
            // J'affiche
            return "Chouette";
        // FIN SI
        }
    // SINON SI la somme de dé 1 ET dé 2 est égale à dé 3 ALORS
    } elseif ($dé[0] + $dé[1] === $dé[2]) {
        // J'affiche 
        return "Velute";
    // SINON SI j'ajoute '+1' à la valeur de dé 1 et que la somme est égale à dé 2 ET
    // j'ajoute '+1' à la valeur de dé 2 et que la somme est égale à dé 3 ALORS
    } elseif ($dé[0] + 1 === $dé[1] && $dé[1] + 1 === $dé[2]) {
        // J'affiche
        return "Suite";
    // FIN SI aucune des conditions est trouvées
    }
    // J'affiche
    return ""; // Aucune combinaison trouvée
// FIN fonction
}
// FAIRE
do {
    // Lancer des dés, je crée un tableau
    $dé = [];
    // POUR j'initialise $i , je conditionne $i , j'incrémente $i
    for ($i = 0; $i < 3; $i++) {
        // Je trouve un chiffre aléatoire entre 1 et 6
        $dé[] = rand(1, 6);
    }

    // J'affiche les valeurs des dés
    echo "Les dés affichent : " . implode(" ", $dé) . "\n";

    // Je vérifier la combinaison
    $combination = checkCombination($dé);

    // J'affiche le résultat
    //SI la variable n'est pas vide 
    if (!empty($combination)) {
        // j'affiche
        echo "CHOUETTE !!! C'est une $combination !\n";
    // SINON
    } else {
        // J'affiche
        echo "Pas de combinaison trouvée.\n";
    }

    // Demander au joueur s'il veut relancer les dés
    echo "Voulez-vous relancer les dés ? (Oui/Non) : ";
    $choice = strtolower(trim(readline()));
// TANT QUE
} while ($choice === "oui");

  

