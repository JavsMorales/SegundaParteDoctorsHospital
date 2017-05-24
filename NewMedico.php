<?php
include 'conexion.php';
/*Este comando hace que sea obligatorio el empleo de ese código para poder ejecutar, el INCLUDE NO*/
$query_recordset1 = "SELECT * FROM Medicos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($miconexion, $recordset);
include 'Header.php';

$max = $_POST["cantidad"];

	$Imagen = $_POST["Imagen"];
	$Nom_Medico = $_POST["Nom_Medico"];
	$Apell_Medico = $_POST["Apell_Medico"];
	$Especialidad = $_POST["Especialidad"];
	$Num_Colegiado = $_POST["Num_Colegiado"];
	$Antiguedad = $_POST["Antiguedad"];
	

$sql = "INSERT INTO medicos  (Nom_Medico,  Apell_Medico, Especialidad, Num_Colegiado, Antiguedad)
		VALUES ('".$Nom_Medico."' , 
			'".$Apell_Medico."' , 
			'".$Especialidad."' , 
		   	'".$Num_Colegiado."' , 
		   	'".$Antiguedad."' 
		   	)";		
	

mysqli_query($miconexion, $sql);

header('Location: listadoMedicos.php');
?>