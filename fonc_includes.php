<?php

declare(strict_types=1);

# Fonction de salutation
function bonjour(?string $prenom = null, ?string $nom = null): string
{
    if ($prenom === null) { // Si $prenom est null on retourne simplement "Bonjour".
        return "Bonjour \n";
    }
    return 'Bonjour ' . $prenom . ' ' . $nom . "\n"; // Sinon on retourne "Bonjour prenom et nom".
}

# Fonction répondre par oui ou par non
function repondre_oui_non(string $phrase): bool
{
    while (true) {
        $reponse = readline($phrase . ' (o) pour oui et (n) pour non: ');

        if ($reponse === 'o') {
            return true;
        } else if ($reponse === 'n') {
            return false;
        }
    }
}

# Fonction demande un créneau horaire.
function demander_creneau(string $phrase = 'Veuillez entrer un créneau'): array
{
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline('Heure d\'ouverture: ');
        if (($ouverture >= 0 && $ouverture <= 23)) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline('Heure de fermerture: ');
        if (($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture)) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}

#Fonction qui demande plusieurs créneaux.
function demander_creneaux(): array
{
    $creneaux = []; // On initialise le tableau qui comportera tous les créneaux.
    $continuer = true; // On initialise une variable $continuer à true.
    while ($continuer) { // Tant que c'est true,
        $creneaux[] = demander_creneau(); // On demande un créneau qu'on stock dans le tableau.
        $continuer = repondre_oui_non('Voulez-vous continuer ? '); // On demande à l'utilisateur s'il veut ajouter un créneau.
    }
    return $creneaux; // On retourne le tableau.
}

# Fonction qui vérifie si le mot ou le chiffre en paramètre est un palindrome.
function palyndrome(): void // Void quand on ne "return" rien
{
    $user_word = readline('Entrez un mot : ');

    $user_word = strtolower($user_word);
    if ($user_word === strrev($user_word)) { // On verifie si le mot donné par l'utilisateur est le même si on lui inversait les lettres.
        echo "C'est un palyndrome ! \n";
    } else {
        echo "Non, ça n'est pas un palyndrome. \n";
    }
}

# Fonction qui calcule la moyenne d'un tableau rempli par un utilisateur.
function moyenne(): void
{
    $notes = []; // On initilise un tableau vide.

    while (true) {
        $user_notes = readline('Entrez une note: '); // On demande à l'utilisateur d'entrer une note.

        if ($user_notes === 'fin') {
            break; // On stop la boucle.
        } else {
            array_push($notes, (int)$user_notes); // Sinon on ajoute la note au tableau.
        }
    }

    $moyenne = array_sum($notes) / count($notes); // On calcul la moyenne du tableau.
    echo round($moyenne, 2) . "\n"; // On l'arrondi à 2 chiffres après la virgule.
}

# Fonction qui filtre les insultes(insultes très limitée)
function filtreInsulte(): void
{
    $insultes = ['merde', 'con'];
    $user_phrase = readline('Entrez un phrase : ');

    // Solution 1 : Mais la boucle répète 2 fois la phrase, c'est pas ce qu'on veut.
    /*
    foreach ($insultes as $insulte) {
        echo str_replace($insulte, str_repeat('*', strlen($insulte)), $user_phrase) . "\n";
    }
    */

    // Solution 2
    $asterisque = []; // On initialise un tableau qui stockera les astérisques 
    foreach ($insultes as $insulte) { // On boucle le tableau d'insultes
        $lettre = substr($insulte, 0, 1);
        $asterisque[] = $lettre . str_repeat('*', strlen($insulte) - 1); // On stock les astérisques de la taille de chaque insulte.
    }
    echo str_replace($insultes, $asterisque, strtolower($user_phrase)) . "\n"; // On remplace l'insulte par les astérisques correspondantes.
}
