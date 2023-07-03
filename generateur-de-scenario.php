<?php

// La méthode Besson, pour créer un générateur de sénario aléatoire

// Pour comprendre le but de cet exercice, voir cette vidéo de Mozinor : https://youtu.be/GJ1ySirkOAE

// Un scénario se compose toujours des quatre éléments suivants :
// - qui
// - quoi
// - a qui
// - où

$Qui = ['Be Willis ','Liam Neeson ','Un chinois ','Un Yamakasi ','Un ninja ','Un flic ','Léon ','Un transporteur ','Un chauffeur de taxi '];
$Quoi = ['pête la gueule ','protège ','sauve ','poursuit ','aide '];
$A_Qui = ['des Yamakasi ','un flic ','des extraterrestres ','des ninjas ','un black ','un chinois ','une pute '];
$Ou = ['à Tokyo ','à New-york ','à Marseille ','à Paris ','en banlieu ','en Audi ','dans un hôtel ','sur l\'autoroute ','dans un aéroport '];

// FAIRE
do {
// Je quantifie les éléments du tableau avec la fonction 'count()'
    $nbr_Qui = count($Qui) -1;
//Je prends un élément au hasard de le tableau avec la fonction 'rand()'
    $i_Qui = rand(0, $nbr_Qui);
//Je duplique au autre tableau
    $nbr_Quoi = count($Quoi) -1;
    $i_Quoi = rand(0, $nbr_Quoi);
    $nbr_A_Qui = count($A_Qui) -1;
    $i_A_Qui = rand(0, $nbr_A_Qui);
    $nbr_Ou = count($Ou) -1;
    $i_Ou = rand(0, $nbr_Ou);

//J'affiche le résultat dans une vairiable en concaténant les résultats
    $senario = $Qui [$i_Qui] .''. $Quoi [$i_Quoi] .''. $A_Qui [$i_A_Qui] .''. $Ou [$i_Ou] .'' ; 
    echo $senario ;
    //Je DEMANDE à l'utilisateur si 'oui' il veut continuer
    $afficher = readline('Voulez vous continuer o / n ? ');
//TANT QUE
} while ($afficher == 'o') ;


