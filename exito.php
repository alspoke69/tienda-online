<?php 

include("include/header.php");



?>
<center>
<img src="exito.jpg" alt="exito" id="imagen-carrito" class="center-block"> </img>
<h1>¡Su compra se realizo con exito!</h1>
<a href="index.php?uid=<?php echo $_GET['uid']; ?>" class= "btn btn-primary">Volver al inicio</a>
</center>

</body>
</html>