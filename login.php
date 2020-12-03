<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login!</title>
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
    		right: 100px;
    		border:none;
    		outline: none;
    		height: 50px;
    		width: 250px;
    		background-color: black;
    		color: white;
    		border-radius: 4px;
    		font-weight: bold;
    	}
    	.btn1:hover{

    		background-color: white;
    		border:1px solid;
    		color: black;
    	}
    	.form-control1{
    		position: relative;
    		top: 50px;
    		right: 100px;
    		width: 210px;
    	}
    	.form-control2{
    		position: relative;
    		top: 30px;
    		right: 140px;
    		width: 210px;

    	}

    	.h4_1{
    		position: relative;
    		top: 20px;
    		right: 60px;
    	}
    	.link2{
    		position: relative;
    		top: 80px;
    		right: 100px;
    	}
    	.parrafo{
    		position: relative;
    		top: 100px;
    		right: 100px;
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
  				<div class="col-lg-7 px-5 pt-5">
  					
  					<h4 class="h4_1">Inicio de sesion</h4>
  					
  					<form action="ingresar_usuario.php" method= "POST">
  						<div class="form-row1">
  							<center>
  							<div class="col-lg-7">
  								
  								<input name="email" type="email" placeholder="Correo electronico"class="form-control2">

  							</div>
  							</center>
  							<div class="form-row2">
  							<div class="col-lg-7">
  								<input name="password" type="password" placeholder="contraseña"class="form-control1 ">
  							</div>
  						</div>
  						<div class="form-row">
  							<div class="col-lg-7">
  								<button name="ingresar_usuario" type="submit" class="btn1">Iniciar sesión</button>
  							</div>
  						</div>
  						<p class="parrafo">¿No tienes una cuenta?</p> <a class="link2" href="registro.php">Registrate</a>
  					</form>
  				</div>
  			</div>
  		</div>

  	</section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>