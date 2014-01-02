<?php
$nom=$REQUEST["nom"];


if(verification($Nom,$Password))
{

session_start();
$_SESSION["NOM_USER"]="$Nom";
}
                                                                                              

?>