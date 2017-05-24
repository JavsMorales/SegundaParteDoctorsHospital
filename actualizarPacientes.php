<?php
include 'conexion.php';

$query_recordset1 = "SELECT * FROM pacientes";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 

$max = $_POST["cantidad"];

for ($i= 0; $i<$max; $i++) 
{	
	$Nom_Paciente = $_POST["Nom_Paciente".$i];
	$Apell_Paciente = $_POST["Apell_Paciente".$i];
	$Sexo = $_POST["Sexo".$i];
	$FNacimiento = $_POST["FNacimiento".$i];
	$Domicilio = $_POST["Domicilio".$i];
	$Poblacion = $_POST["Poblacion".$i];
	$Num_Historial = $_POST["Num_Historial".$i];

//orden para actualizar la información en los diferentes campos, en el campo de la izquierda introducimos el nombre que aparece en la bdd y en el otro el del campo del formulario
	$sql = "UPDATE pacientes SET Nom_Paciente = '$Nom_Paciente' , Apell_Paciente = '$Apell_Paciente' , Sexo = '$Sexo' , FNacimiento = '$FNacimiento', Domicilio = '$Domicilio', Poblacion = '$Poblacion', Num_Historial = '$Num_Historial'WHERE Num_Historial = '$Num_Historial';";

//Insertamos la orden para que se ejecute la sustitución en la consulta 
mysqli_query($miconexion, $sql);
}
header('Location: listadoPacientes.php');
//La ubicación del "Header" es a donde se redirecciona la función de PHP
//header ("location: index.php");
?>
