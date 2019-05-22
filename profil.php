<?php
// Page profil.php

session_start();
// Donne accès au tableau $_SESSION

// ● Que se passe-t-il lorsque l'on supprime les cookies ?
// ● Modifier le code de la page profil.php pour détecter l’absence de la variable de session et éviter le message d'alerte qui se produit.

// Lorsque l'on supprime le cookie côté client, 
// le tableau $_SESSION est vide 
// Il n'a pas de case "pseudo" : 
// => Notice: Undefined index: pseudo in /var/www/html/web2019/exo2/profil.php on line 7

if (isset($_SESSION["pseudo"]))
	$pseudo = $_SESSION["pseudo"]; 
else 
	$pseudo = "bel inconnu"; 

?>

<h1> Page de profil </h1>

Bonjour <?php echo $pseudo; ?> !
