<?php
require('Controller/Controller.php');
//require('Controller/livre.controller.php');
try {
    // if (isset($_GET['action'])) {
    //     livre();
    // } else
    accueil();
} catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
} ?>
<?php
/*
// Import de la classe
require('DBConnection.php');

// Tentative d'instanciation de la classe
//$DbConnection = new DbConnection();
// Tentative d'instanciation de la classe
$oDbConnectionA = DbConnection::getInstance();
$oDbConnectionB = DbConnection::getInstance();

echo '<pre>';
var_dump($oDbConnectionA);
echo '</pre>';

echo '<pre>';
var_dump($oDbConnectionB);
echo '</pre>'; */
?>