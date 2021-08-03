<?php
 include "conexion.php";
 $db=$con;

 $run1=$_GET['run_usuario'];
 $sql= "select *from informacion where run_usuario ='$run1' ";

 $resultado= mysqli_query($db,$sql);
 
while  ($fila =mysqli_fetch_assoc($resultado)){


?>

<form id="formularioRegistro" method="POST" action="./agregar.php">

<div class="col col-md-12">
    <label>Run</label>
    <input type="number" class="form-control"  name="run"   required="required" value="<?php  echo $fila['run_usuario'] ?>">
</div>
<div class="col col-md-12">
    <label>Nombre</label>
    <input type="text" class="form-control" name="nombre"   required="required" value="<?php  echo $fila['nombre'] ?>">
</div>
<div class="col col-md-12">
    <label>Email</label>
    <input type="email" class="form-control" name="email"   required="required" value="<?php  echo $fila['email'] ?>">
</div>

<div class="col col-md-12">
    </br>
    <input type="submit" name="" value="Actualizar">
    <a href="php.php">volver</a>
</div>
</form>
<?php } ?>
<?php
 if($_SERVER["REQUEST_METHOD"]==="POST"){
 $run=$_POST['run'];
 $nombre=$_POST['nombre'];
 $email=$_POST['email'];
 
 if($run !=null || $nombre !=null || $email!=null){
 
     $query1="update  informacion set  run_usuario='".$run."',nombre='".$nombre."',emil='".$email."' where run_usuario='".$run."'";
     
 $resultado= mysqli_query($db,$query1);
 if($run=1){
header("location:php.php");
 }
 }else{
     echo"debe llenar totos los campos";
 }
}

?>
