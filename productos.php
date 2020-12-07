<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registro productos</title>
    <style >
    	*{
    		padding: 0;
    		margin: 0;
    		box-sizing: border-box;
    	}
    	body{
    		background-color: darkcyan;
    	}
    	.row{
    		position: relative;
    		left: 250px;
    		top:50px;
    		background-color: white;
    		height:500px; 
    		width:500px;
    		border-radius: 30px;
    	}
    	.btn1{
    		position: relative;
    		top: 60px;
    		right: 50px;
    		border:none;
    		outline: none;
    		height: 50px;
    		width: 250px;
    		background-color: black;
    		color: white;
    		border-radius: 4px;
    		font-weight: bold;
    	}
      .h1_1{
        position: relative;
        right: 40px;
      }

      .area{
        position: relative;
        top: 50px;
        right:50px;
        width: 300px;
        height: 200px;
      }
      .form-control1{
        position: relative;
        top: 40px;
        right:40px;

      }
       .form-control2{
        position: relative;
        top: 30px;
        right:100px;
      }
    	.btn1:hover{

    		background-color: white;
    		border:1px solid;
    		color: black;
}
    </style>
  </head>
  
  <body>

  	<section class="form my-4 mx-5">
  		<div class="container">
  			<div class="row no-gutters">
  				<div class="col-lg-5">
  					<img src="">
  				</div>
  				<div class="col-lg-7 ">
            <h1 class="h1_1">Registro de productos</h1>
  					
  					<form action="agregar_producto.php?uid=<?php echo $_GET['uid']; ?>" method="POST">
  						<div class="form-row1">
  							<center>
  							<div class="col-lg-7">	
  								<input type="text" placeholder="Nombre del producto"class="form-control2" name="nombre">
  							</div>
  							</center>
  							<div class="form-row2">
  							<div class="col-lg-7">
  								<input type="text" placeholder="Precio"class="form-control1" name="precio">
  							</div>
  						</div>
  						<div class="form-row">
  							<div class="col-lg-7">
                  <textarea class="area" name="url" placeholder="Url de imagen" rows="10" cols="40" ></textarea>
  								<button type="submit" class="btn1" name="agregar_producto">Registrar</button>
								  </form>
							  </div>
  						</div>
  					

  				</div>
  			</div>
  		</div>

  	</section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>