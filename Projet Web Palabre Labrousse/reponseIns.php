<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Reponse</title>
</head>
<?php 
    // Connexion odbc    
    $host = "Classique";
    $user = "ETD";
    $password = "ETD"; 
    $conn = odbc_connect($host,$user,$password,SQL_CUR_USE_ODBC) or die ("raté");
    // Accès à la table
    $nom = $_REQUEST["nom"];
    $prenom = $_REQUEST["prenom"];
    $login = $_REQUEST["login"];
    $mdp = $_REQUEST["pass"];
     
    $result = odbc_exec($conn,utf8_decode("insert into Abonné (Nom_Abonné, Prénom_Abonné, Login, Password) values ( '".$nom."', '".$prenom."','".$login."','".$mdp."')"));
    // boucle de lecture
    echo"<h1>Merci de vous être inscrit sur notre site</h1>";
    // Deconnexion de la base de données 
    odbc_close($conn);
?>


<body>

</body>

</html>
