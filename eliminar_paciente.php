<?php
include 'conexion.php';
$col = $_POST['col'];
$query= "DELETE FROM pacientes WHERE Num_Historial = '$col'";
$resultado = mysqli_query($miconexion, $query);
header("Location: listadopacientes.php");
?>