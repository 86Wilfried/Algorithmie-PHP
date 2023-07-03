<?php

// Language L337 (lire leet)

// Ainsi en L337 la phrase suivante :

// Exemples à tester :
// "    4M4RC$   "         => marc
// "   6#{h1y4m44%^   "    => hiyama
// "   67^$4||107-$$m "    => alliot
// "  8#7540u51554   "     => tsaousis
// " 7P#C4r713r+IR   "     => cartier
// "   7@P3#b3||4mYA#44[ " => bellamy
// " 6R55$j4z1R19+gp4  "   => jaziri
// "  9$71553R4N73&  "     => tisserant
//
//
// C'est parti !

// Je déclare la première chaîne
$crypedName = readline('Tapez un nom crypté, svp : ');

// Je commence pars retirer les espaces
// Dans ce cas : '4M4RC'
$nom = trim($crypedName);

// Je récupére la première lettre dans une variable et la convertis en ENTIER pour avoir la longueur du nom
// Dans ce cas : 4
$taille = $nom [0];

// J'obtiens la longueur totale de la chaine (caractères parasites compris)
// Dans ce cas : 6
$total = strlen($nom);

// Je calcule le nombre de caractères à gauche et à droite avec l'opération suivante :
// Nb caractere = (taille totale - taille nom) / 2
// Dans ce cas : (6-4)/2 => 2/2 => 1
$NbrCaractère = ($total-$taille)/2;

// Je calcule la position du premier caractère du nom
// Dans ce cas : 1
$position = $NbrCaractère;

// J'extrais le nom et le stock dans une nouvelle variable
// Dans ce cas : M4RC
$nom = substr($nom,$position,$taille);

// Dans ce cas MARC
$search=['4','3','1','0','5','7','|'];
$remplace=['A','E','I','O','S','T','L'];
$nom=str_replace($search,$remplace,$nom);

// Je passe toute la chaine de caractère en minusule
// Dans ce cas : marc
$nom=strtoupper($nom);

// J'affiche le résultat final dans la console
echo $nom . "\n\r" ;