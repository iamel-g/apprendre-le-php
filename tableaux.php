<?php
$sdl = "\n"; // 1 saut de ligne
$dsdl = "\n\n"; // 2 sauts de ligne

$note1 = 10;
$note2 = 15;
$notes = [$note1, $note2, 30, 25];
echo $notes[0] . $sdl; // 10
echo $notes[1] . $sdl; // 15
print_r($notes) . $sdl; // Affiche le contenu du tableau "notes".
$notes_sum = array_sum($notes);
$moyenne = $notes_sum / count($notes);
echo 'La moyenne du tableau "notes" est ' . $moyenne . $dsdl;

# Récupération de valeurs d'un tableau.
$eleve = ['Melissa', 'Galvan', [15, 20, 10]];
echo $eleve[2][1] . $sdl; // 20
echo $eleve[2][2] . $sdl; // 10

# Récupération de valeurs par clés d'un tableau.
$eleve2 = ['prenom' => 'Nala', 'nom' => 'Bola', 'notes' => [10, 20, 10]];
echo $eleve2['prenom'] . $sdl; // Nala
echo $eleve2['notes'][1] . $sdl; // 20

$eleve2['prenom'] = 'Prescillia'; // On assigne une autre valeur à la clé prenom.
echo $eleve2['prenom'] . $sdl; // Prescillia

$eleve2['notes'][2] = 20; // La 3ème valeur du tableau "notes" du tableau "eleve2" devient 20.
print_r($eleve2['notes']) . $sdl; // Affiche le contenu du tableau "notes" du tableau "eleve2".
$eleve2['notes'][] = 20; // Ajoute la valeur 20 au tableau "notes" du tableau "eleve2".
$eleve2['classe'] = '6ème B'; // Ajoute la clé "classe" avec la valeur "6ème B". Si pas de clé, l'index sera 0. 
print_r($eleve2) . $sdl; // Affiche le contenu du tableau "eleve2".

# Un tableau "classe" comportant 2 tableau qui représentent les élèves.
$classe = [
    // 1er élève
    [
        'nom' => 'Bola',
        'prenom' => 'Prescillia',
        'notes' => [20, 15, 20, 20]
    ],
    // 2 ème élève
    [
        'nom' => 'Galvan',
        'prenom' => 'Melissa',
        'notes' => [0, 5, 10, 0]
    ]
];

echo $classe[1]['notes'][1] . $sdl; // 5 -> Affiche la 2ème valeur du tableau "notes" du 2ème tableau du tableau "classes".
