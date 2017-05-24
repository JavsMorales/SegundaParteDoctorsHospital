<?php
include 'conexion.php';
/*Este comando hace que sea obligatorio el empleo de ese código para poder ejecutar, el INCLUDE NO*/
$query_recordset1 = "SELECT * FROM medicos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($miconexion, $recordset);
include 'Header.php';
?>



<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1>LISTADO MEDICOS</h1>
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th><h4>Nombre</h4></th>
              <th><h4>Apellidos</h4></th>
              <th><h4>Especialidad</h4></th>
              <th><h4>Antigüedad</h4></th>
              <th><h4>Nº Colegiado</h4></th>
            </tr>
          </thead>
      </div>
  </div>
    <?php 
    $iteracion= 0; //control de fila en la que estamos


    do /* con el "do" repite la operación */{ 
    if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
        ?>
      <tbody>
        <tr class= <?php echo '"'.$clase.'"'; ?>>
          <td><?php echo $row_filas['Nom_Medico']; ?></td>
              
          <td ><?php echo $row_filas['Apell_Medico']; ?></td>
        
          <td><?php echo $row_filas['Especialidad']; ?></td>
              
          <td><?php echo $row_filas['Antiguedad']; ?></td>
              
          <td><?php echo $row_filas['Num_Colegiado']; ?></td>
         
              </form>
          </td>
        </tr>
      <?php 
    $iteracion++;
      } while /*Mientras hayan registros en el array*/ ($row_filas = mysqli_fetch_assoc ($recordset));?>  
        
    </table>
</div>
<?php
include 'Footer.php';
mysqli_free_result($recordset);
mysqli_close($miconexion);
?>