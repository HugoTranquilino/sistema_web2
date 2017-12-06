<?php 
include 'conexion.php';

//recibir los datos y almacenarlos en variables
//$clav_sus =$_POST["clav_sus"];
$tipo_sus =$_POST["tipo_sus"];
$prec_sus =$_POST["prec_sus"];

//consulta para insertar  tipos_suscripciones
$insertar = "INSERT INTO tipos_suscripciones(tipo_suscripcion, valor) VALUES ('$tipo_sus', '$prec_sus')";

#INSERT INTO `tipos_suscripciones`(`id_tipo_suscripcion`, `tipo_suscripcion`, `valor`) VALUES ([value-1],[value-2],[value-3])

//verificaremos si la clave que ingresamos no se repite


//ejecutar la consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
	echo '<script>
	alert("no se pudo realizar la acción solicitada");
	window.history.go(-1);
	</script>';
}else{
	echo '<script>
	alert("se ha registrado exitosamente");
	window.history.go(-1);
	</script>';
}
#scrip
/*'<script>
	alert("se ha registrado exitosamente");
	window.history.go(-1);
	</script>';*/

//cerrar conexion
mysqli_close($conexion);
?>