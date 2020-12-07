<?php

$uid= $_GET['uid'];


include("db/localhost.php");

    $uid = $_GET['uid'];

    $query = "DELETE FROM carrito WHERE idusuario=".$uid;
    $result = mysqli_query($conexion,$query);

    if(!$result) {
        die("Query failed");
    }

    echo 'saved';


header("Location: exito.php?uid=$uid");

?>