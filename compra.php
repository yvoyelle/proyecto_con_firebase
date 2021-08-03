<?php

include "conexion.php";
$db=$con;
$id=$_GET['idProducto'];
$sql="select * from producto where idProducto = '".$id."'";
$result= mysqli_query($db,$sql);

?>
<form action="" >
    <a href="agregar.php">Nuevo</a>
    <link rel="stylesheet" href="tabla.css">
<div>
 

<table id="mytable" class="table table-bordered table-hover ">

     <tr>
    <th>producto</th>
    <th>Nombre</th>
    <th>foto</th>
    <th>descripcion</th>
    <th>precio</th>
    <th>stock</th>
   
    
 
       </tr>
 </thead>
<tbody>
<?php

while($fillas= mysqli_fetch_assoc($result)){

?>
<tr>
  <td> <?php echo $fillas ["idProducto"] ?> </td>
  <td><?php echo $fillas ["Nombres"] ?></td>
  <td><?php echo $fillas ["Foto"] ?></td>
  <td><?php echo $fillas ["Descripcion"] ?></td>
  <td><?php echo $fillas ["Precio"] ?></td>
  <td><?php echo $fillas ["Stock"] ?></td>


  <td>
  <a href="editar.php?run_usuario=  <?php echo $fillas ["run_usuario"] ?>"  >editar</a>
  <a href="eliminar.php?run_usuario=  <?php echo $fillas ["run_usuario"] ?>">Eliminar</a>
  </td>
 
  
</tr>

<?php } ?>

  
</tbody>
 </table>
 

  

</div>
</form>
