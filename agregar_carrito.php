<?php

include("db/localhost.php");


$id = $_GET['uid'];
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$imagen = $_GET['imagen'];




   $sql = "INSERT INTO carrito(nombre, precio, imagen, idusuario) VALUES ('$nombre',
    '$precio', '$imagen', '$id')";

        mysqli_query($conexion, $sql);
   
   
  
   header("location: carrito.php?uid='$id'");




?>