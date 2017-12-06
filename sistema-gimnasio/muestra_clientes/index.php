<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrara_clientes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <?php
    include 'conexion.php';
    include 'seguridad.php';
    $consulta = "SELECT * FROM cliente";
	$resultado = mysqli_query( $con, $consulta) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
    // Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
    
    ?>
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><a class="navbar-brand navbar-link" href="#">Gimnasio <span>Spartacus </span> </a></div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="http://localhost/sistema-gimnasio/registrar/">Clientes </a>
                    <ul>
                        <li role="presentation"><a href="#">Nuevo Cliente </a>
                        <li role="presentation"><a href="#">Lista de Clientes </a>
                        </ul>
                    </li>
                    <li role="presentation"><a href="#">Suscripciones </a></li>
                    
                    <li role="presentation"><a href="#">Pagos </a>
                     <ul>
                        <li role="presentation"><a href="#">Lista de Pagos </a>
                        <li role="presentation"><a href="#">Registro de Pagos </a>
                        </ul>
                    
                    </li>
                    <li role="presentation"><a href="#">Administradores </a>
                    <ul>
                        <li role="presentation"><a href=http://localhost/sistema-gimnasio/eliminar2/lista.php>Lista de Administradores </a>
                        <li role="presentation"><a href="http://localhost/sistema-gimnasio/reg-admin/">Nuevo Administrador </a>
                        </ul>
                    
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
                        <!--menu para los usuarios-->
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                           <!-- <li><a href="#"> </a></li>
                            
                            <li><a href="#">Payments </a></li>-->
                            <li class="active"><a href="logout.php">Cerrar Sesión </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
       <form name="form1" method="post" action="index.php" id="cdr" style="text-align:center;" >
  <h2>BUSQUEDA DE CLIENTES </h2>
      <p>
        <input name="busca"  type="text" id="busqueda" placeholder="Nombre del cliente">
        <input type="submit" name="Submit"  value="buscar" />
        </p>
</form>
<body style="background-color:white;">
</body>
   
  <?php

  include ("conexion.php");

$busca=$_POST['busca'];

if($busca!=""){
  
$busqueda=("SELECT * FROM cliente WHERE nombre LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
$consulta=$con->query($busqueda);
?>
<table width="1166" border="1" id="tab" style="text-align:center; " align = "center" >
   <tr>
     <td width="10">ID_CLIENTE </td>
     <td width="30">NOMBRE</td>
     <td width="30">APELLIDO PATERNO</td>
     <td width="30">APELLIDO MATERNO</td>
     <td width="30">TELEFONO</td>
   </tr>
<?php

while($f=mysqli_fetch_array($consulta)){
echo '<tr>';
echo '<td width="10">'.$f['id_cliente'].'</td>';
echo '<td width="30">'.$f['nombre'].'</td>';
echo '<td width="30">'.$f['apellido_p'].'</td>';
echo '<td width="30">'.$f['apellido_m'].'</td>';
echo '<td width="30">'.$f['tel'].'</td>';

echo '</tr>';
//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}
}
?>
</table>
    
    
    
    <!--<span class="label label-default"><strong>Clientes </strong></span>-->
    <h1>Lista de Clientes</h1>
    <div class="row register-form" >
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table" id="tab_client">
                    <thead>
                        <tr class="titulos">
                            <th>Id Cliente</th>
                            <th>Nombre </th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Teléfono </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        // Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
        #echo "<td>" . $columna['id_cliente'] . "</td><td>" . $columna[ 'nombre'] . "</td>";
		echo "<td>" . $columna['id_cliente'] . "</td><td>" . $columna[ 'nombre'] . "</td><td> " . $columna['apellido_p'] . "</td><td>" . $columna['apellido_m'] . "</td><td>" . $columna['tel'] ."</td>";
		echo "</tr>";
	}
                        mysqli_close( $con );
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
    <button class="btn btn-default" type="button">Editar</button>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>