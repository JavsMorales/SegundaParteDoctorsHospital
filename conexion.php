<?php
$servidor="localhost";
$us="root";
$pass="";
$bdd="hospital";
$miconexion=mysqli_connect($servidor, $us, $pass) or die (mysql_error());
mysqli_select_db($miconexion, $bdd) or die (mysqli_connect_error());
mysqli_set_charset($miconexion,"UTF8");
?>