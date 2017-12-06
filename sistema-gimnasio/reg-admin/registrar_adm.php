<?php 
include 'conexion.php';
//recibir los datos y almacenarlos en variables
$id_admin =$_POST["id_admin"];
$nombre =$_POST["nombre"];
$ap_pat =$_POST["ap_pat"];
$ap_mat =$_POST["ap_mat"];
$tel =$_POST["tel"];
$nom_usu =$_POST["nom_usu"];
$contraseña =$_POST["contraseña"];
//consulta para insertar
$insertar = "INSERT INTO administracion(id_admin, nombre, apellido_p, apellido_m, tel, usuario, contra) VALUES ('$id_admin', '$nombre', '$ap_pat', '$ap_mat', '$tel', '$nom_usu', '$contraseña')";
#$insertar = "INSERT INTO cliente(id_cliente, nombre, apellido_p, apellido_m, tel) VALUES ('$id_cliente', '$nombre', '$ap_pat', '$ap_mat', '$tel')";
//verificaremos si el id del usuario no se repite
$verificar_id = mysqli_query($conexion, "SELECT * FROM administracion WHERE id_admin = '$id_admin'");
if(mysqli_num_rows($verificar_id) > 0){
	echo '<script>
	alert("El id que intentas registrar ya existe");
	window.history.go(-1);
	</script>';
	exit;
}
//verificaremos si el nombre de usuario no se repita
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM administracion WHERE usuario = '$nom_usu'");
if(mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
	alert("El nombre de usuario que intentas registrar ya existe");
	window.history.go(-1);
	</script>';
	exit;
}
//ejecutar la consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo "error al registrar";
}else{
	echo '<script>
	alert("Usted ha sido registrado exitosamente");
	window.history.go(-1);
	</script>';
}
//cerrar conexion
mysqli_close($conexion);
?>