<?php
include 'conexion.php';
//$id = $_POST['identificador'];
//DEFINIR VARIABLE CONSULTA A LA BASE DE DATOS, necesitas referirte a la variable definida anteriormente.
$query = "select * from medicos";
//DEFINIR VARIABLE DEL RESULTADO DE LA CONSULTA (en formato numérico de la base de datos)
$resultado = mysqli_query($miconexion, $query);
//DEFINIR VARIABLE QUE BUSQUE Y CONTRASTE EL RESULTADO DE LA CONSULTA CON LA INFO DE LA BDD (mysqli_fetch_assoc)
$filas = mysqli_fetch_assoc ($resultado);
include 'AdminHeader.php';
?>

      <div class="container">
        <div class="row">
        <div class="jumbotron">
        <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
               <form id="form1" class="form-group" name="form1" method="post" action="NewMedico.php">
            <table class="table table-striped table-hover ">
                  <thead>
                    <tr>
                      <h1>NUEVO MEDICO</h1>
                    </tr>
                  </thead></th>
              <tbody>
              
                <tr class= "active";>
                    <td>     
                      <h4>Nombre</h4>
                      <input type="text" class="form-control" name="Nom_Medico" id="textfield" value="" style="width:200px;"/>
                    </td>
                 </tr>
                 <tr>
                    <td>
                      <h4>Apellidos</h4>
                      <input type="text" class="form-control" name="Apell_Medico" id="textfield" value="" style="width:200px;"/>
                    </td>
                 </tr>
                 <tr class= "active";>
                    <td>
                      <h4>Especialidad</h4>
                      <input type="text" class="form-control" name="Especialidad" id="textfield" value="" style="width:200px;"/>
                    </td>
                 </tr>
                 <tr>
                    <td>
                      <h4>Antigüedad</h4>
                      <input type="text" class="form-control" name="Antiguedad" id="textfield" value="" style="width:200px;"/>
                    </td>
                 </tr>
                 <tr class= "active";>
                    <td>
                      <h4>Nº Colegiado</h4>
                      <input type="text" class="form-control" name="Num_Colegiado" id="textfield" value="" style="width:200px;"/>
                    </td>
                 </tr>
                 <tr>            
                    <td>
                    <form action="subir_imagen.php" method="post" enctype="multipart/form-data">
                      <h4>Imagen</h4>
                      <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" value="" style="width:200px;"/>
                    </td>
                 </tr>                             
                <tfoot>
                  <tr>
                  <td>
                      <input type="hidden" name="id2" value="Num_Colegiado" />
                      <input type="hidden" name="cantidad" value="" />
                      <input type="submit" class="btn btn-info" name="button" id="button" value="Crear" style="width: 100px" />
                  </td>
                  </tr>
                </tfoot>
             </table>
          </form>       
               
            </div>
        </div>
        </div>
      </div>    

<?php
include 'Footer.php';
mysqli_close($miconexion);
?>