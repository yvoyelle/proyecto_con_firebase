<?php

$con =mysqli_connect("localhos","root" ,"", "registro");

if($con){
echo "la conexion realizo exitosa";
}else{
    echo "no hay conexion";
}



?>