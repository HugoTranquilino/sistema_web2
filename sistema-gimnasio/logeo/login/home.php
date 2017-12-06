<?php
session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../login/f_login.php';</script>";
}

?>
<html>
	<head>
		<title>.: HOME :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/user.css">
        <link rel="stylesheet" href="assets3/css/user.css">

	</head>
	<body>

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
                        <li role="presentation"><a href="http://localhost/sistema-gimnasio/registrar/">Nuevo Cliente </a>
                        <li role="presentation"><a href="http://localhost/sistema-gimnasio/muestra_clientes/">Lista de Clientes </a>
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
                        <li role="presentation"><a href="http://localhost/sistema-gimnasio/eliminar2/lista.php">Lista de Administradores </a>
                        <li role="presentation"><a href="http://localhost/sistema-gimnasio/reg-admin/">Nuevo Administrador </a>
                        </ul>
                    
                    </li>
                <!--.pequeño submenu para cerrar la sesion.-->
             <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <!--<li><a href="#">Settings </a></li>
                            <li><a href="#">Payments </a></li> -->
                            <li class="active"><a href="../logout.php">Cerrar Sesión </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
<div class="row">

		<h2>Bienvenido al Sistema</h2>  

		<script type="text/javascript"> function startTime(){ today=new Date(); h=today.getHours(); m=today.getMinutes(); s=today.getSeconds(); m=checkTime(m); s=checkTime(s); document.getElementById('reloj').innerHTML=h+":"+m+":"+s; t=setTimeout('startTime()',500);} function checkTime(i) {if (i<10) {i="0" + i;}return i;} window.onload=function(){startTime();} </script> <div style="font-size:20px;" id="reloj"></div>
		
		<div style="font-size:20px;">
		<?php 
		echo "Hola " .$_SESSION["usuario"].", ";
		?>
	
			<script type="text/javascript"> var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); var f=new Date(); document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); </script>

		</div>


</div>
</div>
</div>
        <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>