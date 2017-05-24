<?php
include 'conexion.php';
/*Este comando hace que sea obligatorio el empleo de ese código para poder ejecutar, el INCLUDE NO*/
$query_recordset1 = "SELECT * FROM ingresos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($miconexion, $recordset);
include 'IndexHeader.php';
?>
<div class="container">
    <div class="row">

	    	<div class="form-group has-success">
	  				<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" style="background-color: #073642;">		
			 			 <label class="control-label" for="inputSuccess">
			 			 	<h3>Por favor introduzca usuario y contraseña</h3>
			 			 </label>
	  				   <form method="post" name="envio" autocomplete="off" action="Login.php">
							<div class="panel panel-success">
							    <div class="panel-body">
								    <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
										<p class="text-info">Usuario:   </p>
											<input name="user" type="text" value="" class="form-control" id="inputSuccess"/><br>
									</div>	
						        </div>
							    <div class="panel-body">
							    	<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
										<p class="text-info">Contraseña:</p>
											<input name="pwd" type="text" value="" class="form-control" id="inputSuccess"/><br>
									</div>
							    </div>
							    <div class="panel-body">
							        <div class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">  
									<input value="Acceder" type="submit" class="btn btn-info"/>		
						</form>
						</p>
							    	<form name="form1" action="crear_usuario.php" method="post">
										<input value="Nuevo Usuario/a" type="submit" class="btn btn-warning"/>
									</form>	
						    	</div>
								
							 </div>
	  				</div>	

				</div>
						
			</div>


	</div>	
</div>
</p>
<?php
include 'Footer.php';
mysqli_close($miconexion);
?>
