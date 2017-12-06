<?php
session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION["usuario"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../login/f_login.php';</script>";
}

?>