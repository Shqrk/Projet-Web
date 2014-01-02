
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Palabre Labrousse E-Commerce Web Site</title>
</head>

<body>
<?php

session_start();

    if (isset($_SESSION["NOM_USER"])) 
    {
	echo "Bonjour ".$_SESSION["NOM_USER"]."vous êtes maintenant connecté";
    }
    else
    {
    echo "Vous n'êtes pas connecté";
    }
?>

<h1>Palabrousse and Cie</h1>
<p>&nbsp;<a href="connexion.html">Connexion</a>
<a href="formulaire_inscription.html">Inscription</a>
<a href="disconnect.php">Deconnexion</a>
</p>
<p>Bienvenue sur notre site web</p>
<p>Pour suivre l'ensemble de nos produits <a href="produits.php">ici</a>.</p>
<p>Pour pouvoir acheter <a href="achat.php">ici</a>.</p>
<p>Pour nous contacter rendez vous <a href="contact.php">ici</a>.</p>
&nbsp;


</body>

</html>
