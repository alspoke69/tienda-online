<?php




include("db/localhost.php");


if (isset($_POST['agregar_producto'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $url = $_POST['url'];

    
    

    $query = "INSERT INTO producto(nombre, precio, imagen) VALUES ('$nombre', '$precio', '$url')";
    $result = mysqli_query($conexion,$query);

    if(!$result) {
        die("Query failed");
    }

    echo 'saved';



    $uid = $_GET['uid']; 
$_SESSION['message'] = 'Guardado exitosamente';
$_SESSION['message_type'] = 'Exitoso';

header("Location: index.php?uid=".$uid);

}
echo 'sdfsdf';
?>