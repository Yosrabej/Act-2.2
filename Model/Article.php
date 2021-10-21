<?php
require('DBConnection.php');
class Article
{

    public function getArticles()
    {
        $titre = isset($_POST['titre']) ? $_POST['titre'] : NULL;
        $texte = isset($_POST['texte']) ? $_POST['texte'] : NULL;
        $auteur = isset($_POST['auteur']) ? $_POST['auteur'] : NULL;
        $date = isset($_POST['date_pub']) ? $_POST['date_pub'] : NULL;
        //  $article = new Article();
        //   $bdd = $article->getBdd();
        DbConnection::connect('articles');
        $bdd1 = new DbConnection();
        $bdd = $bdd1->getConnection();

        // $bdd = getBdd();
        $bdd->query("INSERT INTO articles (titre, texte, auteur, date_pub) VALUES ('$titre', '$texte', '$auteur', '$date')") or die($bdd->error);
        //affichage
        $reponse = $bdd->query('SELECT * FROM articles');

        // On affiche chaque entrée une à une
        while ($donnees = $reponse->fetch_assoc()) {
?><div style=" width:80%; margin-left:50px">
                <h3><?php echo $donnees['titre'] . '<br />'; ?></h3>
                <h4> <?php echo $donnees['texte'] . '<br />'; ?></h4>
                <h5> <?php echo $donnees['auteur'] . '<br />';
                        echo $donnees['date_pub']; ?></h5>
            </div>
            <?php   ?>
<?php
        }
        return $donnees;
    }
    public function getBdd()
    {
        // Import de la classe
        require('DBConnection.php');

        // Tentative d'instanciation de la classe
        //  DbConnection::connect('localhost', 'root', '', 'articles');
        // $dbh = DbConnection::getInstance();
        //  $dbc = $dbh->getConnection();
    }

    /*{ // Sous WAMP connection db
        $bdd = new mysqli('localhost', 'root', '', 'articles');
        // Check connection
        if (!$bdd) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        return $bdd;
    }*/
}
