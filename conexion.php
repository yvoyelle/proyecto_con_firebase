<?php

$con =mysqli_connect("localhost","root" ,"", "registro");

if($con){
//echo "la conexion realizo exitosa";
}else{
  //  echo "no hay conexion";
}
return $con;


?>