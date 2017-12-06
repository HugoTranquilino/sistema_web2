<?php 
require_once "conexion.php";

$idAdmin = $_GET["id"];

$idAdmin = (int)$idAdmin;

//busqueda antes de eliminar
$sqlBorrar ="DELETE FROM administracion WHERE id_admin = '$idAdmin'";

//aver si se puede eliminar
$resultado = mysqli_query($conexion, $sqlBorrar);
if(!$resultado){
	echo "no elimine el dato";
}else{
	echo '<script>
	alert("si se pudo eliminar el administrador");
	window.history.go(-1);
	</script>';
	#echo "si se elimino el dato";
}
mysqli_close($conexion);

?>