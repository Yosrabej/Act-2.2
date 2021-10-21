<?php /*
//require('DBConnection.php');
class Livre
{

    public function getLivre()
    {
        $auteur = isset($_POST['auteur']) ? $_POST['auteur'] : NULL;
        $texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;
        //db connection
        // DbConnection::connect('livre');
        // $bdd1 = new DbConnection();
        //$bdd = $bdd1->getConnection();
        $bdd = new mysqli('localhost', 'root', '', 'livre');
        // Check connection
        if (!$bdd) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        //insertion
        $bdd->query("INSERT INTO livresdor (auteur, texte) VALUES ( '$auteur', '$texte')") or die($bdd->error);
        //affichage
        $reponse = $bdd->query('SELECT * FROM livresdor');

        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch_assoc()) {
            echo $donnees['texte'] . '<br />';
            echo $donnees['auteur'];
        }
        return $donnees;
    }
}
*/ ?>
<?php

//affichage
$reponse = $bdd->query('SELECT * FROM livresdor');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch_assoc()) {

    echo $donnees['texte'] . '<br />';
    echo $donnees['auteur'] . '<br />';
}



?>
