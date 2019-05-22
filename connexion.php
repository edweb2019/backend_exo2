<?php
// Page connexion.php

// Une page “connexion.php” contient un formulaire qui permet à l'utilisateur d'entrer lui-même un pseudo et un mot de passe et de l’envoyer à la page “ouvrir_session.php”

?>

<!-- 
Le paramètre action indique la cible du formulaire, c'est-à-dire la page qui recevra les données 
Lorsque cet attribut est vide, on envoie les données à la même page (celle qui contenait le formulaire - cf. exo1) 
-->

<?php

// Si un message est reçu, on l'affiche 

if (isset($_GET["message"]) && $_GET["message"]!="") {
	//echo "<h3 style=\"color:red;\">$_GET[message]</h3>";

	echo '<h3 style="color:red;">'; 
	echo $_GET["message"]; 
	echo '</h3>'; 
}

?>

<form action="ouvrir_session.php" method="">
Pseudo : <input type="text" name="pseudo" /> <br />
Passe : <input type="password" name="passe" /> <br />

<input type="submit" value="GOGOGO !" />
</form>











