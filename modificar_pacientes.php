<?php
include 'conexion.php';

//$id = $_POST['identificador'];
//DEFINIR VARIABLE CONSULTA A LA BASE DE DATOS, necesitas referirte a la variable definida anteriormente.
$query = "select * from pacientes";

//DEFINIR VARIABLE DEL RESULTADO DE LA CONSULTA (en formato numérico de la base de datos)
$resultado = mysqli_query($miconexion, $query);
//DEFINIR VARIABLE QUE BUSQUE Y CONTRASTE EL RESULTADO DE LA CONSULTA CON LA INFO DE LA BDD (mysqli_fetch_assoc)
$filas = mysqli_fetch_assoc ($resultado);
include 'AdminHeader.php';
?>

  <div class="container">
    <div class="row">
      <div class="jumbotron">

      <h1>MODIFICAR PACIENTES</h1>
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th><h4>Nombre</h4></th>
              <th><h4>Apellidos</h4></th>
              <th><h4>Sexo</h4></th>
              <th><h4>Fecha Nacimiento</h4></th>
              <th><h4>Domicilio</h4></th>
              <th><h4>Población</h4></th>
              <th><h4>Nº Historial</h4></th>
            </tr>
          </thead>
      </div>
    </div>   
  <form id="form1" name="form1" method="post" action="actualizarPacientes.php">
<?php 
$iteracion= 0;
do /* con el "do" repite la operación */{ 
if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
?>
<tbody>

    <tr class= <?php echo '"'.$clase.'"'; ?>>    
      <td>
        <input type="text" class="form-control" name=<?php echo '"Nom_Paciente'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Nom_Paciente']; ?> '/>
      </td>
    

      
    
       <td> 
        <input type="text" class="form-control" name=<?php echo '"Apell_Paciente'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Apell_Paciente']; ?> '/>
      
      </td>
       
      <td>
        <input type="text" class="form-control" name=<?php echo '"Sexo'.$iteracion.'"'; ?> style="width:35px;" id="textfield" value='<?php echo $filas['Sexo']; ?> '/>
      
      </td>
      
      <td>
        <input type="text" class="form-control" name=<?php echo '"FNacimiento'.$iteracion.'"'; ?> style="width:135px;" id="textfield"    value="<?php $date=date_create($filas['FNacimiento']); echo date_format($date,'Y-m-d'); ?>"/>
      </td>
  
      <td>
        <input type="text" class="form-control" name=<?php echo '"Domicilio'.$iteracion.'"'; ?> style="width:170px;" id="textfield" value='<?php echo $filas['Domicilio']; ?> '/>
      </td>
  
      <td>
        <input type="text" class="form-control" name=<?php echo '"Poblacion'.$iteracion.'"'; ?> style="width:100px;" id="textfield" value='<?php echo $filas['Poblacion']; ?> '/>
      </td>
     
      <td>
        <input type="text" class="form-control" readonly name=<?php echo '"Num_Historial'.$iteracion.'"'; ?> style="width:90px;" id="textfield" value='<?php echo $filas['Num_Historial']; ?> '/>
      </td>
   
      <td>
        <input type="hidden" name=<?php echo '"id2'.$iteracion.'"'; ?> value=<?php echo $filas['Num_Historial']?> />
        <!--Este input hidden se encuentra oculto y referencia a la variable $id2 que es con la que se referencia a los campos que se van a modificar-->
      </td>
    </tr>
    <tr>
      <?php 

      $iteracion++;
        } while /*Mientras hayan registros en el array*/ ($filas = mysqli_fetch_assoc ($resultado));?>  
        <td>
          <input type="hidden" name=<?php echo "cantidad"; ?> value=<?php echo '"'.$iteracion.'"';?> />
          <input type="submit" class="btn btn-success" name="button" id="button" value="Actualizar" />
        </td>
      </form>
    </tbody>
  </table>
</div>
<?php
include 'Footer.php';
mysqli_free_result($recordset);
mysqli_close($miconexion);
?>