<?php
 include "conexion.php";
 $db=$con;
 $run=$_GET['run_usuario'];
 $sql=" update * from informacion where run_usuario ='".$run."'";
$resultado= mysqli_query($db,$sql);
header("location:php.php")

?>