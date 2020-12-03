<?php

include('db/localhost.php');

//require 'header.php';


$email= $_POST['email'];
$password = $_POST['password'];


$email = stripcslashes($email);
$password = stripcslashes($password);
//$email = mysqli_real_escape_string($email);
//$password = mysqli_real_escape_string($password);


$result = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$email' and contrasena = '$password'"
) or die("Failed to query database ");
$row = mysqli_fetch_array($result);

if($row['correo'] == $email && $row['contrasena'] == $password){
    echo "Login sucessfull";

    $uid = $row['id'];
    $rol = $row['rol'];

    session_start();
    $_SESSION['login'] = 'administrador';
    header("location: index.php?rol='$rol'&uid=".$uid);

} else {

    header("location: login.php");
    
    echo "Incorrecto";
}

