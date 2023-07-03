<?php

// CRÉEZ LES CONDITIONS SUIVANTES :

const EOL = "\n\r";

// 1 - CALCUL DE L'ÂGE
// Demandez à l'utilisateur de saisir son année de naissance.
// Refuser les années avant 1900 ou après 2023. (Créer un message d'erreur)
// Sinon, calculer l'âge de la personne
// (optionnel) : une fois cela fait, vous pouvez, si vous le souhaitez, ajouter des message supplémentaire en fonction de l'âge de la personne
// par exemple si son age est inférieur à 10 ans, ou supérieur à 100...

// ENTIER annee = DEMANDER "Quel est ton annee de naissance ?"
$annee = readline ('Quel est ton année de naissance ?');
while ($annee < 1900 || $annee > 2023){
    echo "Veuillez saisir une année entre 1900 et 2023." . EOL;
    $annee = readline("Veuillez resaisir une année de naissance ? ");
    $age = 2023 - $annee;
    echo "Vous avez " . $age . " ans." . EOL;

    if ($age < 10) {
        echo "Vous êtes encore très jeune !" . EOL;
    } elseif ($age > 100) {
        echo "Vous êtes centenaire !" . EOL;
    } else {
        echo "Vous êtes éligible à notre programme." .EOL;
    }
}



// // SI (annee < 1900 OU annee > 2023) ALORS 
// //      AFFICHER "Veuillez saisir une année entre 1900 et 2023."
// // SINON
// //(Créer) ENTIER age = 2023 - année;         
//         //AFFICHER "Vous avez " . age . " ans."
// // FIN SI
// }


//     // 2 - DIVISION
// // Demandez deux nombres a et b à l'utilisateur
// // Affichez le résultat de la division de a par b (attention au piège) 

// // ENTIER a = DEMANDER "Saisissez un nombre : "
// // ENTIER b = DEMANDER "Saisissez un autre nombre : "
$a = readline ('Saisissez un nombre : ');
$b = readline ('Saisissez un autre nombre : ');
if ($b == 0){
    echo 'Division par zéro impossible.';
} else {
    $result = $a/$b;
    echo "$a/$b est égale à $result" . EOL;
}
// // SI ( b = 0 ) ALORS
    // AFFICHER "Division par zéro impossible."
// SINON
    // ENTIER resultat = a/b;
    // AFFICHER "a / b = resultat";
// FIN SI

// 3 - TROUVEZ PI
// Demandez à l'utilisateur de taper la valeur de PI 
// arrondie à 2 chiffres après la virgule
// Féliciter l'utilisateur si il a bien répondu
// Le réprimer si ce n'est pas le cas
// vous aurez besoin de parseFloat() et de toFixed() cherchez sur internet

// Commencer par lister les variables 
// DECIMAL pi
// DECIMAL m_pi

$pi = readline( 'Veuillez saisir la valeur de PI :');
$pi = round($pi , 2);
$m_pi = round(M_PI, 2);
if ($pi == $m_pi ) {
    echo 'Bravo !' . EOL;
} else {
    echo 'Non valide ! ' . EOL;
}

// pi = DEMANDER "Veuillez saisir la valeur de PI : "
// pi = ARRONDIR pi A 2 DECIMAL
// m_pi = ARRONDIR M_PI A 2 DECIMAL
// SI (vérification) pi = m_pi ALORS
    // AFFICHER "Bravo !"

// 4 - ÉTAT DE L'EAU
// Demandez à l'utilisateur de saisir une température
// Lui dire si, à cette température, l'eau est à l'état solide, liquide, ou gazeux

// ENTIER temp = DEMANDER "Veuillez saisir une température en degrès."
// SI (temps <= 0) ALORS
    // AFFICHER "A 'temps°C' l'eau est sous forme de glace"
// SINON SI (temp >= 100 ) ALORS
    // AFFICHER "A 'temps°C' l'eau est sous forme gazeux"
// SINON 
    // AFFICHER "A 'temps°C' l'eau est liquide"
// FIN SI

$temp = readline( 'Veuillez saisir une température en degrès ?');
    if ($temp <= 0) {
        echo 'À ' . $temp . ' degrès l\'eau est sous forme de glace.' . EOL;
    } else if ($temp >= 100){
        echo 'À ' . $temp . ' degrès l\'eau est sous forme de gaz.' . EOL;
    } else {
        echo 'À ' . $temp . ' degrès l\'eau est sous forme liquide.' . EOL;
    }

// 5 - DIVISIBLE PAR 3 ET/OU 5 ?
// Demandez un nombre à l'utilisateur.
// Lui dire si ce nombre est divisible par 5 et/ou par 3
// Note : souvenez-vous de l'opérateur %

// ENTIER nom = DEMANDER "Veuillez saisir un numbre : "
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
// Peut-être pourriez-vous utiliser toLowerCase() ou toUpperCase()

// Solution 1
// STRING lettre = DEMANDER "Saisissez une lettre :"
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




 
        
       
       
   
       
// OU 
// Solution 2 ( A PRIVILLEGIER )
// TABLEAU voyelle =  ['A','E','I,'O','U','Y']
// STRING lettre = DEMANDER "Saisissez une lettre"
// lettre = MAJUSCULE (lettre)
// SI (}) (lettre n'est pas dans le TABLEAU voyelles) ALORS
// AFFICHER "lettre est une consonne"
// SINON 
// AFFICHER "lettre est une voyelle"
//FIN SI ({)