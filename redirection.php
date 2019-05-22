<?php
// Page redirection.php

header("Location:accueil.html");
// demande de redirection

// V2 : Interrompt l'interprétation du reste de la page
die("message"); 

// Pour tester depuis la ligne de commandes : 
// telnet localhost 80
// GET /.../redirection.php HTTP/1.0

/* EXEMPLE : 

$ telnet localhost 80
Trying 127.0.0.1...
Connected to localhost.
Escape character is '^]'.
GET /web2019/exo2/redirection.php HTTP/1.0

HTTP/1.1 302 Found
Date: Wed, 22 May 2019 07:29:07 GMT
Server: Apache/2.4.29 (Ubuntu)
Location: accueil.html
Content-Length: 7
Connection: close
Content-Type: text/html; charset=UTF-8

messageConnection closed by foreign host.
*/

?>

<h1> Page de redirection </h1>

V1 : Ce texte est envoyé au navigateur 
V2 : Ce texte n'est plus envoyé 

