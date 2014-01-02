<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Disconnect</title>
</head>

<body>
<?php
    session_start();
    session_destroy();
    header("Location: AcceuilSiteWeb.php");
?>
<p>Vous avez été déconnecté</p>
</body>

</html>
