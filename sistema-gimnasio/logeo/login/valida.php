<?php

$usuario = $_POST['nombre'];
$pass = $_POST['contra'];

if(empty($usuario) || empty($pass)){
   header("Location: f_login.php");
   exit();
}

#include ("../conexion_sql/conexion.php");

/*Debido a un problema de compatibilidad con la version de PHP en la conexion del logeo
se utilizo MYSQL y ya no MYSQLI*/
mysql_connect('localhost', 'root', '') or die("Error al conectar " . mysql_error());
mysql_select_db('sitio4') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from administracion where nombre='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
   if($row['contra'] ==  $pass){
      session_start();
      $_SESSION['usuario'] = $usuario;
      header("Location: home.php");
   }else{
      header("Location: f_login.php");
      exit();
   }
}else{
   header("Location: f_login.php");
   exit();
}


?>