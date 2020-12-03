<?php

include("db/localhost.php");


$username = $_POST['usuario'];
$email =$_POST['correo'];
$password = $_POST['password'];
$name = $_POST['nombre'];

  // $password = md5($password);
   $sql = "INSERT INTO usuario(nombre, correo, contrasena, rol, usuario) VALUES ('$name',
   '$email', '$password', 1,  '$username')";
   mysqli_query($conexion, $sql);
   $_SESSION['message'] = "Has iniciado sesión";

 



$result = mysqli_query($conexion,"SELECT * FROM usuario where correo = '$email' and contrasena = '$password'"
) or die("Failed to query database ");
$row = mysqli_fetch_array($result);

$uid = $row['id'];



   session_start();
   $_SESSION['login'] = 'administrador';
   header("location: index.php?uid=".$uid);




?>