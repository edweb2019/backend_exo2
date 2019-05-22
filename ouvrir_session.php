<?php
// Page ouvrir_session.php

session_start(); 
// [La première fois] Crée un identifiant unique 
// qui sera envoyé dans un cookie sans délai d'expiration 
// en php, ce cookie s'appelle PHPSESSID 

// Ce cookie est envoyé dans les entêtes !
// => Comme pout toute commande écrivant dans les entêtes, 
// => c'est à faire AVANT d'écrire du HTML
// => le plus haut possible dans le code php 
// => RISQUE : erreur "headers already sent"
// => NB : par défaut, le serveur apache bufferise la réponse
// => Cf. output_buffering dans php.ini 

// [A chaque fois]
// Récupère un éventuel cookie d'id de session envoyé par le client 
// Donne accès au tableau $_SESSION qui contient des variables
// pour le client associé à cet identifiant de session 

// création var. session 
$_SESSION["pseudo"] = "tom";

/*
Une page “ouvrir_session.php” appelle session_start et crée une variable de session “pseudo” valant “tom”. 
Une seconde page “profil.php” affiche cette variable.
● Que se passe-t-il lorsque l'on supprime les cookies ?
● Modifier le code de la page profil.php pour détecter l’absence de la variable de session et éviter le message d'alerte qui se produit.
● Modifier la page ouvrir_session.php pour qu’elle redirige l’utilisateur directement vers la page profil.php.
*/
header("Location:profil.php");
?>

<a href="profil.php">Lien vers profil.php</a>



