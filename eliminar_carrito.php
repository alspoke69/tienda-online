<?php


include("db/localhost.php");

    $id = $_GET['id'];


    $query = "DELETE FROM producto WHERE id=".$id;
    $result = mysqli_query($conexion,$query);

    if(!$result) {
        die("Query failed");
    }

    echo 'saved';




$_SESSION['message'] = 'Guardado exitosamente';
$_SESSION['message_type'] = 'Exitoso';

header("Location: index.php");


?>