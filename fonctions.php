<?php
# include 'fonc_includes.php'; // Pour ne pas bloquer l'execution du script.
require 'fonc_includes.php'; // Fait tout planter si le fichier n'existe pas.
# require_once 'fonc_include.php'; Inclue un fichier qu'une fois.

# Ici j'appelle toutes les fonctions du fichier "fonctions.php" grâce au "require"
echo bonjour();

repondre_oui_non('Voulez-vous continuer ?');

$creneaux = demander_creneaux('Entrez vos créneaux');
var_dump($creneaux);

palyndrome();

moyenne();

filtreInsulte();
