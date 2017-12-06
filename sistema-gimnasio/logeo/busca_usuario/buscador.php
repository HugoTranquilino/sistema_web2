
<form name="form1" method="post" action="buscador.php" id="cdr" >
  <h2>BUSQUEDA DE USUARIOS </h2>
      <p>
        <input name="buscar"  type="text" id="busqueda" placeholder="ID de usuario">
        <input type="submit" name="Submit"  value="buscar" />
        </p>
</form>
<body style="background-color:cyan;">
</body>
   
  <?php

  include ("../conexion_sql/conexion.php");

 
$busca=$_POST['buscar'];


if($busca!=""){
  
$busqueda=("SELECT * FROM administracion WHERE id LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
$consulta=$con->query($busqueda);
?>
<table width="1166" border="1" id="tab" style="text-align:justify;">
   <tr>
     <td width="10">ID_ADMI </td>
     <td width="30">NOMBRE</td>
     <td width="30">APELLIDO PATERNO</td>
    <td width="30">APELLIDO MATERNO</td>
       <td width="30">TELEFONO</td>
       <td width="30">USUARIO</td>
       <td width="30">CONTRASEÑA</td>
    </tr>
 
<?php

while($f=mysqli_fetch_array($consulta)){
echo '<tr>';
echo '<td width="10">'.$f['id_admin'].'</td>';
echo '<td width="30">'.$f['nombre'].'</td>';
echo '<td width="30">'.$f['apellido_p'].'</td>';
echo '<td width="30">'.$f['apellido_m'].'</td>';
    echo '<td width="30">'.$f['tel'].'</td>';
    echo '<td width="30">'.$f['usuario'].'</td>';
    echo '<td width="30">'.$f['contra'].'</td>';
echo '</tr>';
//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}

}

?>
</table>
