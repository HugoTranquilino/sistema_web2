<?php 
include 'conexion.php';

//recibir los datos y almacenarlos en variables
$id_cliente =$_POST["id_cliente"];
$nombre =$_POST["nombre"];
$ap_pat =$_POST["ap_pat"];
$ap_mat =$_POST["ap_mat"];
$tel =$_POST["tel"];

//consulta para insertar
$insertar = "INSERT INTO cliente(id_cliente, nombre, apellido_p, apellido_m, tel) VALUES ('$id_cliente', '$nombre', '$ap_pat', '$ap_mat', '$tel')";

//verificaremos si el id del usuario no se repite
$verificar_id = mysqli_query($conexion, "SELECT * FROM cliente WHERE id_cliente = '$id_cliente'");
if(mysqli_num_rows($verificar_id) > 0){
	echo '<script>
	alert("El id que ingresaste ya se encuentra registrado");
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