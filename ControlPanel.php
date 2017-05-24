<?php
include 'conexion.php';
include 'AdminHeader.php';
?>

<div class="container">
  <div class="row">
     <div class="jumbotron">
		 			 	<h3>Editar imagenes carrousel</h3>
			 			 </label>
			 			 
		<div class="btn-group btn-group-justified">
		  <a href="#" class="btn btn-default">
		  	<form action="subir_imagen.php" method="post" enctype="multipart/form-data">
			   	    <input type="file" name="fileToUpload" id="fileToUpload" value="Imagen 1">
				    <input type="submit" value="Subir imagen" name="submit"></a>
			</form>
			</a>
		    <a href="#" class="btn btn-default">
		  	<form action="subir_imagen.php" method="post" enctype="multipart/form-data">
			   
				    <input type="file" name="fileToUpload" id="fileToUpload" value="Imagen 2">
				    <input type="submit" value="Subir imagen" name="submit"></a>
		    </form>
		    </a>
		    <a href="#" class="btn btn-default">
		  	<form action="subir_imagen.php" method="post" enctype="multipart/form-data">
			   
				    <input type="file" name="fileToUpload" id="fileToUpload" value="Imagen 3">
				    <input type="submit" value="Subir imagen" name="submit"></a>
			</form>
			</a>
		</div>
	</div>
	<!--<form action="subir_imagen.php" method="post" enctype="multipart/form-data">
    Subir Imagen:
    <input type="file" name="fileToUpload" id="fileToUpload" value="Seleccione imagen">
    <input type="submit" value="Subir imagen" name="submit">
	</form>-->
 </div>
</div>
</body>
</html>
<?php
include 'Footer.php';
mysqli_close($miconexion);
?>
