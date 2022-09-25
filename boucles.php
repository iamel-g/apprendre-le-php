<?php
$chiffre = null; // La variable "chiffre" est pour l'instant vide.

# Boucle while (tant que) : Tant que le chiffre entré par l'utilisateur n'est pas égal à 10 on lui demande d'entrer un chiffre.
while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrez un chiffre : '); // Demande à l'utilisateur d'entrer un chiffre.
}

echo "Bravo vous avez gagné ! \n\n"; // Si l'utilisateur entre le chiffre 10, il a gagné.

# Boucle for

# Affiche les chiffres de 0 à 10.
for ($i = 0; $i < 10; $i++) {
    echo "- $i \n";
}

echo "\n";

# Même chose, de 2 en 2
for ($i = 0; $i < 10; $i += 2) {
    echo "- $i \n";
}

echo "\n";

# Boucle pour chaque 

# Un tableau de notes
$notes1 = [18, 20, 15, 4.5];

# Afficher les valeurs du tableau "notes"

# Avec un for classique d'abord
for ($i = 0; $i < count($notes1); $i++) {
    echo "- $notes1[$i] \n";
}

echo "\n\n";

# Avec une boucle pour chaque
foreach ($notes1 as $key => $note) { // Pour chaque "note" dans "notes"
    echo "- $note \n";
}

echo "\n\n";

# Autre exemple

# On créé un tableau avec 2 élèves ayant 2 clés différentes. 
$eleves = [
    'cm2' => 'Prescillia',
    'cm1' => 'Melissa'
];

# On affiche les valeurs du tableau
foreach ($eleves as $classe => $eleve) { // Pour chaque "eleve" dans "eleves"
    echo "$eleve est dans la classe $classe \n"; // On utilise la clé "classe" pour afficher la classe de l'élève.
}

# On créé un tableau avec deux classes différentes.
$eleves2 = [
    'cm2' => ['Prescillia', 'Paul', 'Jean'],
    'cm1' => ['Melissa', 'Julie', 'Fred']
];

# Pour afficher chaque élève par classe
foreach ($eleves2 as $classe => $liste_eleves) {
    echo "\n La classe $classe: \n"; // On récupère le nom de la classe grâce à la clé.
    foreach ($liste_eleves as $eleve) {
        echo "- $eleve \n"; // On récupère ses élèves.
    }
    echo "\n";
}

# Exercice 1
/*
Demander à l'utilisateur de rentrer une note ou de taper "fin". Chaque note est sauvegardée dans un tableau et à la fin, on affiche le tableau sous forme de liste.
*/

$notes2 = [];
$note2 = null;

while ($note2 !== 'fin') {
    $note2 = readline('Entrez une note (ou "fin") : ');
    if ($note2 !== 'fin') {
        $notes2[] = (int)$note2;
    }
}

echo "\n";

foreach ($notes2 as $key => $note2) {
    echo "- $note2 \n";
}

# Autre façon

$notes3 = [];

while (true) {
    $note3 = readline('Entrez une note (ou "fin") : ');

    if ($note3 === 'fin') {
        break;
    } else {
        $notes3[] = (int)$note3;
    }
}

foreach ($notes3 as $key => $note3) {
    echo "- $note3 \n";
}

echo "\n";

# Exercice 2

$horaires = [];

while (true) {
    $ouverture = (int)readline('Heure d\'ouverture : ');
    $fermeture = (int)readline('Heure de fermuture :');

    if ($ouverture >= $fermeture) {
        echo "Le créneau ne peut pas être enregistré car l'heure de ($ouverture) est supérieure à l'heure de fermeture. \n";
    } else {
        $creneaux[] = [$ouverture, $fermeture];
        $action = readline('Enregistrer un nouveau créneau ? (n) : ');
        if ($action === 'n') {
            break;
        }
    }
}

$heure = readline('A quelle heure voulez-vous visiter le magasin ? ');
$creneau_trouve = false;

foreach ($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneau_trouve = true;
        break;
    }
}

if ($creneau_trouve) {
    echo "Le magasin sera ouvert \n";
} else {
    echo "Désolé le magasin sera fermé \n";
}

echo "\n";

echo "Le magasin sera ouvert de";
foreach ($creneaux as $key => $creneau) {
    if ($key > 0) {
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
    if ($key > 0) {
        echo ".\n";
    }
}
