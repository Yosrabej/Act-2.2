<?php
require('Controller/livre.controller.php');
try {

    livre();
} catch (Exception $e) {
    echo '<html><body>Erreur ! ' . $e->getMessage() . '</body></html>';
}
