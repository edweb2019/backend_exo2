<?php
// Page ouvrir_session.php

// V1 : Une page “ouvrir_session.php” appelle session_start et crée une variable de session “pseudo” valant “tom”. 

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

// V1 : création var. session 
// $_SESSION["pseudo"] = "tom";

// V2 : on vérifie les données envoyées par l'utilisateur
// Si PB : on redirige vers la page de connexion 


// 1) récupérer données pseudo,passe
// QUelle méthode a été utilisée ? GET ou POST 
// si GET => les données sont dans $_GET
// si POST => les données sont dans $_POST
// NB : $_REQUEST contient $_GET, $_POST et $_COOKIES 


// Deux problèmes éventuels : 
// - absence d'un des champs 
// - champ présent mais vide  

$pseudo = false;
$passe = false;

if (isset($_GET["pseudo"]) && $_GET["pseudo"]!="")
	$pseudo = $_GET["pseudo"]; 

if (isset($_GET["passe"]) && $_GET["passe"]!="")
	$passe = $_GET["passe"];

// DEBUG : 
echo "pseudo:$pseudo passe:$passe";

// ATTENTION : toutes les chaines de caractères sont VRAIES
// sauf : chaines vides ; chaine "0"
// NEVER TRUST USER INPUT 

// 2) vérifier qu'elles ne sont pas vides 
if (($pseudo!==false) && ($passe!== false)) {
	// On stocke le pseudo 
	$_SESSION["pseudo"] = $pseudo;
	header("Location:profil.php");
	//echo " OK: profil";
} else {
	// On veut envoyer un message à la page de connexion 

	// - QS (querystring) au moment de la redirection
	// - message dans les sessions => mauvaise pratique 
	$msg = "Pseudo & Passe ne doivent pas être vides => Vérifiez votre saisie !";  
	// Il faut encoder le message en respectant le standard d'encodage des URL (cf. RFC approprié)
	// en php : urlencode 
// ?message=Pseudo+%26+Passe+ne+doivent+pas+être+vides+%3D>+Vérifiez+votre+saisie+%21
	header("Location:connexion.php?message=" . urlencode($msg));
	//echo " PB: connexion";
}

/*
En cas d'absence du pseudo ou du mot de passe, on évitera les alertes en déclenchant une redirection vers la page « connexion.php» tout en envoyant un message “Pseudo & Passe ne doivent pas être vides => Vérifiez votre saisie !”.
○ Comment encoder correctement ce message ?
○ Ce message doit s’afficher dans la page connexion.php. Le code affichant ce message ne doit pas provoquer d’erreur si aucun message n’est fourni.
*/

// V1 : on redirige vers la page de profil 
//header("Location:profil.php");
?>

<a href="profil.php">Lien vers profil.php</a>



