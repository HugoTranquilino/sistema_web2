<?php session_start(); ?>
<html>
	<head>
		<title>Login</title>
		<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
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
                </button><a class="navbar-brand navbar-link" href="#">Gimnasio<span>Spartacus </span> </a></div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                 
                </ul>
             
            </div>
        </div>
    </nav>


	<div class="container">
    <div class="row">
	<div class="col-md-13">

	<h1 id="inicio" >Inicio de Sesión</h1>

		<div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card " >
		<p class="profile-name-card"> </p>

		<form role="form" name="login" action="../login/valida.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="nombre" placeholder="Nombre de usuario" autofocus="" >

		  </div>
		  <div class="form-group">
		    <label for="password">Contraseña</label>
		    <input type="password" class="form-control" id="password" name="contra" placeholder="Contraseña" autofocus="" >
		  
		  </div>
		   <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Iniciar Sesión</button>


		</form>
</div>
</div>
</div>
</div>
		<script src="../js/valida_login.js"></script>
		<script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>