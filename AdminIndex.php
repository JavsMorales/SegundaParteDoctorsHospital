<?php
include 'conexion.php';
include 'AdminHeader.php';
include 'AdminCarrousel.php';
?>
 
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <blockquote class="blockquote-reverse">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-8">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<br>
<br>
<br>

</body>
</html>
<?php
include 'Footer.php';
mysqli_close($miconexion);
?>
