<?php
$sdl = "\n"; // 1 saut de ligne
$dsdl = "\n\n"; // 2 sauts de ligne

$note = (int)readline('Entrez votre note : '); // Interaction avec l'utilisteur.

if ($note > 10) { // Si la note est supérieure à 10.
    echo 'Bravo vous avez la moyenne.' . $sdl;
} else if ($note === 10) { // Sinon si note est égale à 10.
    echo 'Vous avez juste la moyenne.' . $sdl;
} else { // Sinon
    echo 'Dommage vous n\'avez pas la moyenne.' . $sdl;
}

# Cas d'actions d'un jeu.
$action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour) ');

# Avec un "if".
if ($action === 1) { // Si l'action est égale à 1
    echo 'J\'attaque !' . $sdl;
} elseif ($action === 2) { // Sinon si l'action est égale à 2
    echo 'Je défend' . $sdl;
} elseif ($action === 3) { // Sinon si l'action est égale à 3
    echo 'Je ne fais rien' . $sdl;
} else { // Sinon
    echo 'Commande inconnue' . $sdl;
}


# Même chose avec un switch.
/*
switch ($action) {
    case 1:
        echo 'J\'attaque !' . $sdl;
        break;
    case 2:
        echo 'Je défend' . $sdl;
        break;
    case 3:
        echo 'Je ne fais rien' . $sdl;
        break;
    default:
        echo 'Commande inconnue' . $sdl;
}
*/

# Cas d'heures d'ouverture d'un magasin.

$heure = (int)readline('Entrez une heure : ');

# SI l'heure est sup. ou égale à 9 "ET" que l'heure est inf. ou égale à 12 "OU" l'heure est sup. ou égale à 14 "ET" que l'heure est inf. ou égale à 17
if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
    echo 'Le magasin sera ouvert' . $sdl;
} else {
    echo 'Le magasin sera fermé' . $sdl;
}


# A l'inverse
# SI l'heure n'est pas sup. ou égale à 9 "ET" que l'heure n'est pas inf. ou égale à 12 "OU" l'heure n'est pas sup. ou égale à 14 "ET" l'heure n'est pas inf. ou égale à 17.
/* 
if (!((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17))) {
    echo 'Le magasin sera fermé' . $sdl;
} else {
    echo 'Le magasin sera ouvert' . $sdl;
}
*/

# Rappel
/*
VRAI && VRAI = VRAI
VRAI && FAUX = FAUX
FAUX && FAUX = FAUX

VRAI || VRAI = VRAI
VRAI || FAUX = VRAI
FAUX || FAUX = FAUX
*/
