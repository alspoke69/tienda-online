

<?php include("include/header.php");

if(isset($_GET['uid'])){
$uid = $_GET['uid'];
} else {}
 $nombre = $_GET['nombre'];
 $imagen = $_GET['imagen'];
 $precio = $_GET['precio'];
 
 ?>

<body>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h1 class="page-header"><?php echo $nombre; ?></h1>
    </div>
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-md-6 col-sm-12">
      
      <!-- There's only One image -->
      <div class="">
      <div class="col-sm-12">
        <div class="main-product-image">
        <img class="card-img-top" src="<?php echo $imagen; ?>" alt="Imagen de un calzado negro" >
        </div>
      </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-12">
      <div class="col-sm-12">
        <form class="form-horizontal" name="buy">
          <div class="row">



          
            <!-- Product Price  -->
            <div class="clearfix">
            <div class="form-group">
              <label class="col-sm-3 col-md-3 control-label">Precio:</label>
              <div class="col-sm-8 col-md-9">
                <span class="product-form-price">$<?php echo $_GET['precio']; ?> MXN</span>
                      

            <div class="form-group product-stock">
              <div class="col-sm-8 col-sm-offset-3 col-md-9 col-md-offset-3">
                <a href ="agregar_carrito.php?uid=<?php echo $uid ?>&nombre=<?php echo $nombre?>&precio=<?php echo $precio ?>&imagen=<?php echo $imagen?>"  class="btn btn-primary">Agregar a carrito <a/>
                <br>
                <a href="index.php?uid=<?php echo $uid ?>" class="btn btn-link" title="Continúa Comprando">← Continúa Comprando</a>
              </div>
            </div>

        
            </div>

            

            
          </div>
        </form>
      </div>






</body>

<html>