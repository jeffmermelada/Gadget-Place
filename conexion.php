<?php

$conexion=mysqli_connect("localhost","root","","gadget_place");
mysqli_set_charset($conexion,"utf8");

if($conexion==true){

    echo "Conexión satisfactoria";
}
