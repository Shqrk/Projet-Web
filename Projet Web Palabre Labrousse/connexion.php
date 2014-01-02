<?php 
    // Connexion odbc 
    $login = $_REQUEST["login"];
    $mdp = $_REQUEST["pass"];
    $host = "Classique";
    $user = "ETD";
    $password = "ETD"; 
    $conn = odbc_connect($host,$user,$password,SQL_CUR_USE_ODBC) or die ("raté");
    // Accès à la table
	$result = odbc_exec($conn,utf8_decode("select * from Abonné where Login='".$login."' and Password='".$mdp."'"));
	 // boucle de lecture
	if ($row = odbc_result($result,1)) {//utilisateur enregistré avec mot de passe correct
		session_start();
		$_SESSION["NOM_USER"]= odbc_result($result,3);
		//echo 'Autentification reussie';
		//echo 'Connexion en cours';
		header("Location: AcceuilSiteWeb.php");
	}
 	else
 	{ 
 	header("Location: connexion2passage.html");
 	}    
 	// Deconnexion de la base de données 
    odbc_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Validation</title>
</head>

<body>

</body>

</html>