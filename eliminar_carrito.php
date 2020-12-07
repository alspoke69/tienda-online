<?php


include("db/localhost.php");

    $id = $_GET['id'];
    $uid = $_GET['uid'];

    $query = "DELETE FROM carrito WHERE id=".$id;
    $result = mysqli_query($conexion,$query);

    if(!$result) {
        die("Query failed");
    }

    echo 'saved';




$_SESSION['message'] = 'Guardado exitosamente';
$_SESSION['message_type'] = 'Exitoso';

header("Location: carrito.php?uid=".$uid);


?>