<?php
  include "conexion.php";
  $db=$con;

$RUN1="run";
  if($_SERVER["REQUEST_METHOD"]==="POST"){
      
    $run=$_POST['run'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    
    if($run !=null || $nombre !=null || $email!=null){
    
        $query="INSERT INTO informacion (run_usuario,nombre,email)
         values('$run','$nombre','$email')";
    $resultado= mysqli_query($db,$query);
    if($run=1){
header("location:php.php");
    }
    }else{
        echo"debe llenar totos los campos";
    }
      }



?>


<div class="row">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!---eso es una fila-->
    <div class="col col-md-6">
        <h1>Registro de usuarios</h1>
        <form id="formularioRegistro" method="POST" action="./agregar.php">

            <div class="col col-md-12">
                <label>Run</label>
                <input type="number" class="form-control" name="run" required="required">
            </div>
            <div class="col col-md-12">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" required="required">
            </div>
            <div class="col col-md-12">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required="required">
            </div>

            <div class="col col-md-12">
                </br>
                <input type="submit" name="" value="agregar">
                <button type="button"> volver</button>
            </div>
            </form>
            
    
</div>
