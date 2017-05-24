<?php
  $usuario = $_POST['user'];
  $password = $_POST['pwd'];

  /*if(empty ($usuario) || empty($password)) {
  	header("Location: listadoPublicoPacientes.php?error");
  	exit();
	}
*/
  include 'conexion.php';

  $resultado = mysqli_query($miconexion, "SELECT * FROM usuarios WHERE user = '" . $usuario . "'" );


	if ($row = mysqli_fetch_array($resultado)){
    if ($row['pwd'] == $password){
      // echo "adelante";
      session_start();
      $_SESSION['user'] = $usuario;
      header ("Location: AdminIndex.php");
      exit();
    } else {
      mysqli_close($miconexion);
      header ("Location: listadoPublicoPacientes.php?error");
      exit();
      }
  } else {
    mysqli_close($miconexion);
    header ("Location: listadoPublicoPacientes.php?error");
    exit();
  }


