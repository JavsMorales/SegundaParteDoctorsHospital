<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Inicio</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<body style="background-image:url(/Supuesto9may/img/gotas.jpeg); background-repeat:no-repeat; overflow-wrap: 20%; ">-->
<body>
<div class="container">
  <div class="row">
    
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Bienvenido</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="Index.php">Información <span class="sr-only">(current)</span></a></li>
                 <li><a href="ControPanel.php">Panel de Control</a></li>
                </ul>
                <ul class="nav navbar-nav">
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="listadoMedicos.php">Medicos</a></li>
                    <li class="divider"></li>
                    <li><a href="listadoIngresos.php">Ingresos</a></li>
                    <li class="divider"></li>
                    <li><a href="listado Pacientes.php">Pacientes</a></li>
                  </ul>
                 <li><a href="Logout.php">Cerrar Sesión</a></li>
                </li>
              </ul>
              <!--<div class="form-group">-->
              <ul class="nav navbar-nav navbar-form navbar-right" role="search">
                  <input type="text" class="form-control" placeholder="Paciente | Medico">
                    <button type="submit" class="btn btn-default">Buscar</button>
              </ul>
            </div>     
            </div>
          </div>
        </nav>
    
    </div>
</div>