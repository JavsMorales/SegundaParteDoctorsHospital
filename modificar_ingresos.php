<?php
include 'conexion.php';
//$id = $_POST['identificador'];
//DEFINIR VARIABLE CONSULTA A LA BASE DE DATOS, necesitas referirte a la variable definida anteriormente.
$query = "select * from ingresos";
//DEFINIR VARIABLE DEL RESULTADO DE LA CONSULTA (en formato numérico de la base de datos)
$resultado = mysqli_query($miconexion, $query);
//DEFINIR VARIABLE QUE BUSQUE Y CONTRASTE EL RESULTADO DE LA CONSULTA CON LA INFO DE LA BDD (mysqli_fetch_assoc)
$filas = mysqli_fetch_assoc ($resultado);
include 'AdminHeader.php';
?>

<div class="container">
  <div class="row">
    <div class="jumbotron">
    
        <h1>MODIFICAR INGRESOS</h1>
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
      </div>
    </div>    
     <form id="form1" class="form-group" name="form1" method="post" action="actualizarIngresos.php">
          <?php 
          $iteracion= 0;
         
          do /* con el "do" repite la operación */{ 
          if ($iteracion%2==0){$clase= "active";} else {$clase= "";}
              ?>
      <tbody>

       
       <tr class= <?php echo '"'.$clase.'"'; ?>>     
            <td>     
              <input type="text" class="form-control" readonly name=<?php echo '"Num_Ingreso'.$iteracion.'"'; ?> style="width:40px;" id="textfield" value='<?php echo $filas['Num_Ingreso'];
              ?>'/>
            </td>

      
            <td>
            
              <input type="date" class="form-control" name=<?php echo '"FIngreso'.$iteracion.'"'; ?> style="width:145px;" id="textfield" 
              value="<?php $date=date_create($filas['FIngreso']); echo date_format($date,'Y-m-d'); ?>"/>
            </td>
           
            <td>
              <input type="date" class="form-control"  name=<?php echo '"FAlta'.$iteracion.'"'; ?> style="width:145px;" id="textfield" 
              value="<?php $date=date_create($filas['FAlta']); echo date_format($date,'Y-m-d'); ?>"/>
            </td>
           
            <td style="padding-left: 10px;">
            
              <input type="text" class="form-control" name=<?php echo '"Planta'.$iteracion.'"'; ?> style="width:40px;" id="textfield" value='<?php echo $filas['Planta']; ?>'/>
            </td>
            <td style="padding-left: 10px;">
           
              <input type="text" class="form-control" name=<?php echo '"Cama'.$iteracion.'"'; ?> style="width:40px;" id="textfield" value='<?php echo $filas['Cama']; ?> '/>
            </td>
            <td style="padding-left: 20px;">
           
              <input type="text" class="form-control" name=<?php echo '"Alergico'.$iteracion.'"'; ?> style="width:35px;" id="textfield" value='<?php echo $filas['Alergico']; ?>'/>
            </td>
            <td>
           
              <input type="text" class="form-control" name=<?php echo '"Diagnostico'.$iteracion.'"'; ?> style="width:135px;"id="textfield" value='<?php echo $filas['Diagnostico']; ?>'/>
            </td>
            <td>
           
              <input type="number" class="form-control" name=<?php echo '"Coste'.$iteracion.'"'; ?> style="width:100px;" id="textfield" value='<?php echo $filas['Coste']; ?>'/>
            </td>
            <td>
           
              <input type="text" class="form-control" readonly name=<?php echo '"Num_Historial'.$iteracion.'"'; ?> style="width:80px;" id="textfield" value='<?php echo $filas['Num_Historial']; ?>'/>
            </td>
            <td>
           
              <input type="text" class="form-control" name=<?php echo '"Num_Colegiado'.$iteracion.'"'; ?> id="textfield" value='<?php echo $filas['Num_Colegiado']; ?>'/>
            </td>
            <td>
               
            <td>
              <input type="hidden" name="id2" value=<?php echo $filas['Num_Ingreso']?> />
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
   </table>
 </div>
<?php
include 'Footer.php';
mysqli_free_result($recordset);
mysqli_close($miconexion);
?>