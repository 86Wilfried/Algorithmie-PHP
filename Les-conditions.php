<?php

// CRÉEZ LES CONDITIONS SUIVANTES :

const EOL = "\n\r";

// 1 - CALCUL DE L'ÂGE
// Demandez à l'utilisateur de saisir son année de naissance.
// Refuser les années avant 1900 ou après 2023. (Créer un message d'erreur)
// Sinon, calculer l'âge de la personne
// (optionnel) : une fois cela fait, vous pouvez, si vous le souhaitez, ajouter des message supplémentaire en fonction de l'âge de la personne
// par exemple si son age est inférieur à 10 ans, ou supérieur à 100...

// ENTIER annee = DEMANDER à l'utilisateur
$annee = readline ('Quel est ton année de naissance ?');
//TANT QUE la variable est inf à 1900 OU sup à 2023 ALORS
while ($annee < 1900 || $annee > 2023){
    // AFFICHE
    echo "Veuillez saisir une année entre 1900 et 2023." . EOL;
    // Donne une valeur à la variable en demandant a l'utilisateur 
    $annee = readline("Veuillez resaisir une année de naissance ? ");
    // Donne une valeur à la variable avec une soustraction
    $age = 2023 - $annee;
    // AFFICHE
    echo "Vous avez " . $age . " ans." . EOL;
    // SI l'age est inf à 10 ALORS
    if ($age < 10) {
        // AFFICHE
        echo "Vous êtes encore très jeune !" . EOL;
    // SINON SI l'age est sup à 100 ALORS
    } elseif ($age > 100) {
        //AFFICHE
        echo "Vous êtes centenaire !" . EOL;
    // SINON
    } else {
        //AFFICHE
        echo "Vous êtes éligible à notre programme." .EOL;
    // FIN SI
    }
// FIN TANT QUE
}

//     // 2 - DIVISION
// // Demandez deux nombres a et b à l'utilisateur
// // Affichez le résultat de la division de a par b (attention au piège) 

// // ENTIER a = DEMANDER à l'utilsateur
// // ENTIER b = DEMANDER à l'utilsateur
$a = readline ('Saisissez un nombre : ');
$b = readline ('Saisissez un autre nombre : ');
// SI la valeur de b est égale a 0 ALORS
if ($b == 0){
    // AFFICHE
    echo 'Division par zéro impossible.';
// SINON
} else {
    // ENTIER = valeur de 'A' DIVISE la valeur de 'B'
    $result = $a/$b;
    // AFFICHE
    echo "$a/$b est égale à $result" . EOL;
// FIN SI
}

// 3 - TROUVEZ PI
// Demandez à l'utilisateur de taper la valeur de PI 
// arrondie à 2 chiffres après la virgule
// Féliciter l'utilisateur si il a bien répondu
// Le réprimer si ce n'est pas le cas
// vous aurez besoin de parseFloat() et de toFixed() cherchez sur internet

// Commencer par lister les variables 
// DECIMAL pi
// DECIMAL m_pi

// FLOAT demander à l'utilisateur
$pi = readline( 'Veuillez saisir la valeur de PI :');
// ARRONDIE le FLOAT à 2 DÉCIMAL 
$pi = round($pi , 2);
// VALEUR exacte de PI ARRONDI à 2 DECIMAL
$m_pi = round(M_PI, 2);
// SI la valeur entré par l'utilisateur est égal à la valeur de pi de référence ALORS
if ($pi == $m_pi ) {
    // AFFICHE
    echo 'Bravo !' . EOL;
// SINON
} else {
    //AFFICHE
    echo 'Non valide ! ' . EOL;
// FIN SI
}


// 4 - ÉTAT DE L'EAU
// Demandez à l'utilisateur de saisir une température
// Lui dire si, à cette température, l'eau est à l'état solide, liquide, ou gazeux

// ENTIER temp = DEMANDER à l'utilisateur d'entré un ENTIER
$temp = readline( 'Veuillez saisir une température en degrès ?');
// SI ENTIER est inf ou égale à 0 ALORS   
if ($temp <= 0) {
    // AFFICHER
    echo 'À ' . $temp . ' degrès l\'eau est sous forme de glace.' . EOL;
// SINON SI ENTIER est sup ou égal à 100 ALORS
} else if ($temp >= 100){
    // AFFICHE
    echo 'À ' . $temp . ' degrès l\'eau est sous forme de gaz.' . EOL;
// SINON
} else {
    // AFFICHE
    echo 'À ' . $temp . ' degrès l\'eau est sous forme liquide.' . EOL;
// FIN SI
}

// 5 - DIVISIBLE PAR 3 ET/OU 5 ?
// Demandez un nombre à l'utilisateur.
// Lui dire si ce nombre est divisible par 5 et/ou par 3

// ENTIER nom = DEMANDER à l'utilisateur d'entrer un ENTIER
$nom = readline('Veuillez saisir un nombre : ');
// SI (nombre%5 = 0 ET nombre%3 = 0) ALORS
if ($nom%3 == 0 && $nom%5 == 0) {;
    // AFFICHER "nombre est divisible par 5 et par 3. "
    echo 'Le nombre ' . $nom . ' est divisible par 3 et 5' . EOL;
// SINON SI (nombre%5 = 0) ALORS
} elseif ($nom%5 == 0) {
    // AFFICHER "nombre est divisible par 5 mais pas par 3."
    echo 'Le nombre ' . $nom . ' est divisible par 5' . EOL;
// SINON SI (nombre%3 = 0) ALORS
} elseif ($nom%3 == 0) {
        // AFFICHER "nombre est divisible par 3 mais pas par 5."
    echo 'Le nombre ' . $nom . ' est divisible par 3' . EOL;
    // SINON     
    } else {
        // AFFICHER "nombre est divisible ni par 5 ni par 3."
    echo 'Le nombre ' . $nom . 'n\'est divisible ni par 5 et ni par 3' . EOL;
// // FIN
}

// 6 - CONSONNE OU VOYELLE ?
// Demandez à l'utilisateur de saisir une lettre,
// puis, lui dire si c'est une voyelle ou une consonne

// STRING lettre = DEMANDER à l'utilsateur
$lettre = readline('Saisissez une lettre :');
// lettre = MAJUSCULE (lettre)
$lettre = strtoupper($lettre);
// SELON lettre
switch ($lettre) {
// CAS 'A'
// CAS 'E'
// CAS 'I'
// CAS 'O'
// CAS 'U'
// CAS 'Y' 
    case 'A' :
    case 'E' :
    case 'I' :
    case 'O' :
    case 'U' :
    case 'Y' :
    // AFFICHER "lettre est une voyelle"
    echo $lettre . ' : cette lettre est une voyelle.'; 
    break ;
 // DEFAUT 
default :
    // AFFICHER "lesttre est une consonne"
    echo $lettre . ' : cette lettre est une consonne.';
    break ;
    // FIN SELON
}