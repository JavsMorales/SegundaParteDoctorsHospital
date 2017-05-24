<?php
include 'conexion.php';
/*Este comando hace que sea obligatorio el empleo de ese código para poder ejecutar, el INCLUDE NO*/
$query_recordset1 = "SELECT * FROM ingresos";/* selección todos los campos */
$recordset = mysqli_query($miconexion, $query_recordset1) or die (mysqli_connect_error());
/* asociaremos a un array la consulta que acabamos de realizar para que nos muestre todas las entradas de la bdd*/
$row_filas = mysqli_fetch_assoc($recordset); 
//echo mysqli_num_rows($miconexion, $recordset);
include 'Header.php';
?>

<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1>LISTADO INGRESOS</h1>
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th><h4>Nº Ingreso</h4></th>
      <th><h4>Fecha Ingreso</h4></th>
      <th><h4>Fecha Alta</h4></th>
      <th><h4>Planta</h4></th>
      <th><h4>Cama</h4></th>
      <th><h4>Alergico</h4></th>
      <th><h4>Diagnostico</h4></th>
      <th><h4>Coste</h4></th>
      <th><h4>Nº Historial</h4></th>
      <th><h4>Nº Colegiado</h4></th>
    </tr>
  </thead>

<?php 
$iteracion= 0; //control de fila en la que estamos


do /* con el "do" repite la operación */{ 
if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
    ?>
  <tbody>
    <tr class= <?php echo '"'.$clase.'"'; ?>>
      <td><?php echo $row_filas['Num_Ingreso']; ?></td>
          
      <td ><?php $date=date_create($row_filas['FAlta']);
      echo date_format($date,"d/m/Y");
      ?>
      </td>
    
      <td>
      <?php
      $date=date_create($row_filas['FIngreso']);
      echo date_format($date,"d/m/Y");
      ?>
      <td><?php echo $row_filas['Planta']; ?></td>
          
      <td><?php echo $row_filas['Cama']; ?></td>
          
      <td><?php echo $row_filas['Alergico']; ?></td>
      <td><?php echo $row_filas['Diagnostico']; ?></td>
      <td><?php echo $row_filas['Coste']; ?></td>
      <td><?php echo $row_filas['Num_Historial']; ?></td>
      <td><?php echo $row_filas['Num_Colegiado']; ?></td>
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