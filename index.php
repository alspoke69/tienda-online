
<?php include("include/header.php") ?>

<body class="bg-info">
    <div class = "container p-4 row">
    <div class="card-deck">
    <?php
$query = "SELECT * FROM producto";
      $result_prueba = mysqli_query($conexion, $query);
      
      while($row = mysqli_fetch_array($result_prueba)) { ?>

        <div class="card">
          <img class="card-img-top" src="<?php echo $row['imagen'];  ?>" alt="Imagen de un calzado negro" id="imagen-tamano">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
            <p class="card-text">$<?php echo $row['precio']; ?> MXN</p>
            <?php if(isset($_SESSION['login']) && $_SESSION['login']=='administrador') { ?>
            <a href="producto_individual.php?uid=<?php echo $_GET['uid']; ?>&nombre=<?php echo $row['nombre']; ?>&precio=<?php echo $row['precio']; ?>&imagen=<?php echo $row['imagen'];?>" class="btn btn-primary">Ver producto</a>
            <a href="eliminar_producto.php?id=<?php echo $row['id'];?>&uid=<?php echo $_GET['uid']; ?>" class="btn btn-danger">Eliminar</a>
            <?php } elseif(isset($_SESSION['login']) && $_SESSION['login']=='usuario') { ?>
            <a href="producto_individual.php?uid=<?php echo $_GET['uid']; ?>&nombre=<?php echo $row['nombre']; ?>&precio=<?php echo $row['precio']; ?>&imagen=<?php echo $row['imagen'];?>" class="btn btn-primary">Ver producto</a>
            <?php  } else {  ?>
              <a href="producto_individual.php?nombre=<?php echo $row['nombre']; ?>&precio=<?php echo $row['precio']; ?>&imagen=<?php echo $row['imagen'];?>" class="btn btn-primary">Ver producto</a>
            <?php  }?>
          </div>
        </div>
    <?php  } ?>
      </div>
      </div>
</body>
</html>