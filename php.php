<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
   <?php
   include "conexion.php";
$db=$con;
   $sql="select * from informacion";
   $result= mysqli_query($db,$sql);
 
   ?>
   <form action="" >
       <a href="agregar.php">Nuevo</a>
       <link rel="stylesheet" href="tabla.css">
<div>
    

<table id="mytable" class="table table-bordered table-hover ">

        <tr>
       <th>Run</th>
       <th>Nombre</th>
       <th>Email</th>
       
    
          </tr>
    </thead>
<tbody>
<?php
  
  while($fillas= mysqli_fetch_assoc($result)){

 ?>
 <tr>
     <td> <?php echo $fillas ["run_usuario"] ?> </td>
     <td><?php echo $fillas ["nombre"] ?></td>
     <td><?php echo $fillas ["email"] ?></td>
   

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

</body>

</html>