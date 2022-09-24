<?php
$sdl = "\n"; // 1 saut de ligne
$dsdl = "\n\n"; // 2 sauts de ligne

# Presentation
$prenom = 'Melissa';
$nom = 'Galvan';
$age = 28;
echo 'Je m\'appelle ' . $prenom . ' ' . $nom . ' et j\'ai ' . $age . ' ans.' . $dsdl; // Je m'appelle Melissa Galvan et j'ai 28 ans.

# Moyenne
$note1 = 10;
$note2 = 15;
$moyenne = ($note1 + $note2) / 2;
echo $moyenne . $sdl; // 12.5
# NULL
echo $note3 = NULL . $dsdl; // Rien

# Exercice 
echo 'Bonjour ' . $prenom . ' ' . $nom . ' vous avez eu ' . $moyenne . ' de moyenne.' . $sdl;
echo "Bonjour $prenom $nom vous avez eu $moyenne de moyenne. $sdl";
