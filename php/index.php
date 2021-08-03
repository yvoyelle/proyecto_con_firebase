<?php





?>



<body>
  


<?php
   include "conexion.php";
$db=$con;
   $sql="select * from producto";
   $result= mysqli_query($db,$sql);
 
   ?>
   <form action="" >
       <a href="agregar.php">Nuevo</a>
       <link rel="stylesheet" href="tabla.css">
<div>
    

<table  id="mytable" class="table table-bordered table-hover " >

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
  <a href="editar.php?idProducto=  <?php echo $fillas ["idProducto"] ?>"  >editar</a>
  <a href="eliminar.php?run_usuario=  <?php echo $fillas ["run_usuario"] ?>">Eliminar</a>
  </td>
 
  
</tr>

<?php } ?>

  
</tbody>
 </table>
 





 <div class="contenido">
      
   
      <div>
      <p>PC escritorio</p>
          <img src="../img/notbook.jpg" alt="">
      <p>PC escritorio 8RAM</p>
      <p>$ 699.990</p>
      <div class="comprar">
          <input class=" input-color" type="submit" name="" value="Agregar al carrito">
          <button class="boton-color">comprar</button>
      </div>
     
     </div>
         
     <div>
      <p>Camara conon</p>
      <img src="../img/canon.jpg" alt="">
      <p>camara canon 16px</p>
      <p>$ 499.990</p>
      <div class="comprar">
          <input class=" input-color" type="submit" name="" value="Agregar al carrito">
       
          <a class="boton-color" href="../compra.php?idProducto=">comprar</a>
      </div>
  
  </div>
     
             
      <div>
          <p>Audifonos</p>
          <img src="../img/audifono.jpg" alt="">
      <p>audifono coby</p>
      <p>$ 99.990</p>
      <div class="comprar">
          <input class=" input-color" type="submit" name="" value="Agregar al carrito">
          <button class="boton-color ">comprar</button>
      </div>
      </div>  
  
  
      </div>  
</body>
