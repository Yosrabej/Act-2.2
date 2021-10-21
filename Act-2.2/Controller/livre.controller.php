<?php
require 'view\livre.php';

require 'Model/Livre.php';
// Affichage
function livre()
{
    $livre = new Livre();
    $reponse = $livre->getLivre();
    echo  $reponse;
}
