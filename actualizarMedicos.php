<?php
//CONEXIÓN A MI SERVIDOR
include 'conexion.php';

$query_recordset1 = "SELECT * FROM medicos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 

$max = $_POST["cantidad"];
$max = 1;
for ($i= 0; $i<$max; $i++) 
{
	$Nom_Medico = $_POST["Nom_Medico".$i];
	$Apell_Medico = $_POST["Apell_Medico".$i];
	$Especialidad = $_POST["Especialidad".$i];
	$Num_Colegiado = $_POST["Num_Colegiado".$i];
	$Antiguedad = $_POST["Antiguedad".$i];
	
//orden para actualizar la información en los diferentes campos, en el campo de la izquierda introducimos el nombre que aparece en la bdd y en el otro el del campo del formulario
	$sql = "UPDATE medicos SET Nom_Medico = '$Nom_Medico' , Apell_Medico = '$Apell_Medico' , Especialidad = '$Especialidad' , Num_Colegiado = '$Num_Colegiado' WHERE Num_Colegiado = '$Num_Colegiado';";

//Insertamos la orden para que se ejecute la sustitución en la consulta 
mysqli_query($miconexion, $sql);

echo $_FILES[$_POST["Num_Colegiado".$i].".jpg"]["tmp_name"];

$target_dir = "img/Medicos";
$target_file = $target_dir . $_FILES[$_POST["Num_Colegiado".$i].".jpg"]["tmp_name"] . ".jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES[$_POST["Num_Colegiado".$i].".jpg"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES[$_POST["Num_Colegiado".$i].".jpg"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES[$_POST["Num_Colegiado".$i].".jpg"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES[$_POST["Num_Colegiado".$i].".jpg"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


}
//La ubicación del "Header" es a donde se redirecciona la función de PHP
//header ("location: index.php");

header('Location: listadoMedicos.php');
?>
