<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <center>
        <h3>Publier un article</h3>
        <form method="post" action="index.php">
            <input type="text" name='titre' placeholder="ajouter le titre" style="display: block;margin-top:20px" />
            <textarea type="textarea" name='texte' placeholder="ajouter le texte" style="display: block; margin-top:20px; height:100px; width:170px;"></textarea>
            <input type="text" name='auteur' placeholder="auteur" style="display: block;margin-top:20px" />
            <input type="date" name='date_pub' placeholder="date" style="display: block; margin-top:20px; margin-bottom:20px" />
            <input type="submit" value="Publier" />
        </form>
        <a href="view/livre.php">livre d'or</a>
    </center>
</body>

</html>