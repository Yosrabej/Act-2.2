<?php

require 'view\article.php';
require 'Model/Article.php';
// Affiche les articles
function accueil()
{
    $articles = new Article();
    $reponse = $articles->getArticles();
    echo  $reponse;
}
