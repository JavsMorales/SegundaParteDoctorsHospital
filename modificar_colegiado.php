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
      <h1>MODIFICAR MEDICOS</h1>
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th><h4>Imagen</h4></th>
              <th><h4>Nombre</h4></th>
              <th><h4>Apellidos</h4></th>
              <th><h4>Especialidad</h4></th>
              <th><h4>Antigüedad</h4></th>
              <th><h4>Nº Colegiado</h4></th>
            </tr>
          </thead>
    </div>
  </div>    
    <form id="form1" class="form-group" name="form1" method="post" enctype="multipart/form-data" action="actualizarMedicos.php">
          <?php 
          $iteracion = 0;
         
          do /* con el "do" repite la operación */{ 
          if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
              ?>
           <tbody>
      
         <tr class= <?php echo '"'.$clase.'"'; ?>>    
            <td>     
              <input type="file" name=<?php echo  '"'.$filas['Num_Colegiado'].'.jpg"'; ?> id=<?php echo  '"'.$filas['Num_Colegiado'].'.jpg"'; ?> class="form-control">
            </td>
            <td>     
              <input type="text" class="form-control" name=<?php echo '"Nom_Medico'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Nom_Medico']; ?>'/>
            </td>

      
            <td>
            
              <input type="text" class="form-control" name=<?php echo '"Apell_Medico'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Apell_Medico']; ?>' />
            </td>
           
            <td>
              <input type="text" class="form-control" name=<?php echo '"Especialidad'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Especialidad']; ?>' />
            </td>
           
            <td>
            
              <input type="text" class="form-control" name=<?php echo '"Num_Colegiado'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Num_Colegiado']; ?>' />
            </td>
            <td>
           
              <input type="text" class="form-control" name=<?php echo '"Antiguedad'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Antiguedad']; ?>' />
            </td>
            <td>
               
            <td>
              <input type="hidden" name="id2" value=<?php echo $filas['Num_Colegiado']?> />
              
             
            <!--Este input hidden se encuentra oculto y referencia a la variable $id2 que es con la que se referencia a los campos que se van a modificar-->
            </td>
          </tr>
          <tr>
            <?php 
            $iteracion++;
              } while /*Mientras hayan registros en el array*/ ($filas = mysqli_fetch_assoc ($resultado));?>  
            <td>
              <input type="hidden" name="cantidad" value=<?php echo '"'.$iteracion.'"';?> />
              <input type="submit" class="btn btn-success" name="button" id="button" value="Actualizar" />
              </form>
           </tbody>
        </table>
      </div>
<?php
include 'Footer.php';
mysqli_free_result($recordset);
mysqli_close($miconexion);
?>