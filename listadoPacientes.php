<?php
include 'conexion.php';

/*Este comando hace que sea obligatorio el empleo de ese código para poder ejecutar, el INCLUDE NO*/
$query_recordset1 = "SELECT * FROM pacientes";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($miconexion, $recordset);
include 'AdminHeader.php';
?>


<div class="container">
  <div class="row">
    <div class="jumbotron">
     <h1>LISTADO PACIENTES</h1>
      <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th><h3>Nombre</h3></th>
        <th><h3>Apellidos</h3></th>
        <th><h3>Sexo</h3></th>
        <th><h3>Fecha Nacimiento</h3></th>
        <th><h3>Domicilio</h3></th>
        <th><h3>Poblacion</h3></th>
        <th><h3>Nº Historial</h3></th>
      </tr>
    </thead>

<?php 
$iteracion= 0; //control de fila en la que estamos


do /* con el "do" repite la operación */{ 
if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
    ?>
  <tbody>
    <tr class= <?php echo '"'.$clase.'"'; ?>>
      <td><?php echo $row_filas['Nom_Paciente']; ?></td>
          
      <td ><?php echo $row_filas['Apell_Paciente']; ?></td>
    
      <td><?php echo $row_filas['Sexo']; ?></td>

      <td><?php $date=date_create($row_filas['FNacimiento']);
      echo date_format($date,"d/m/Y");
      ?></td>
      </td>
          
      <td><?php echo $row_filas['Domicilio']; ?></td>
          
      <td><?php echo $row_filas['Poblacion']; ?></td>
      <td><?php echo $row_filas['Num_Historial']; ?></td>
    <td><form name="form1" action="eliminar_paciente.php" method="post">
              <input type="hidden" name="col" value=<?php echo $row_filas['Num_Historial']; ?>>
              <input type="submit" class="btn btn-warning" name="Eliminar" value="Eliminar">
              </form>
          </td>
        </tr>
  <?php 
$iteracion++;
  } while /*Mientras hayan registros en el array*/ ($row_filas = mysqli_fetch_assoc ($recordset));?>  
<tfoot>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><form name="form1" action="modificar_pacientes.php" method="post">
                  
                  <input type="submit" class="btn btn-success" name="Modificar" value="Modificar">
                  </form>
          </td>    
        </tfoot>
    </table>
</div>
<?php
include 'Footer.php';
mysqli_free_result($recordset);
mysqli_close($miconexion);
?>