
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Registro de usuario</title>
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
    		top: 90px;
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
    		top: 120px;
    		right: 100px;
    		width: 210px;
    	}
    	.form-control2{
    		position: relative;
    		top: 110px;
    		right: 140px;
    		width: 210px;

    	}
      .form-control3{
        position: relative;
        top: -15px;
        right:100px;
        width: 210px;
      }
      .form-control4{
        position: relative;
        top: -10px;
        right: 100px;
        width: 210px;
      }

    	.h4_1{
    		position: relative;
    		top: 20px;
    		right: 60px;
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
  					
  					<h4 class="h4_1">Registro de usuario</h4>
  					
  					<form action="agregar_usuario.php" method="POST">
  						<div class="form-row1">
  							<center>
  							<div class="col-lg-7">
  								
  								<input name="correo" type="email" placeholder="Correo electrónico"class="form-control2">

  							</div>
  							</center>
  							<div class="form-row2">
  							<div class="col-lg-7">
                                  <input name="password" type="password" placeholder="Contraseña"class="form-control1 ">
  							</div>
  						</div>
              <div class="form-row2">
                <div class="col-lg-7">
                  <input name="nombre" type="parrafo" placeholder="Nombre"class="form-control3 ">
                </div>
              </div>
              <div class="form-row2">
                <div class="col-lg-7">
                  <input name="usuario"   type="parrafo" placeholder="Nombre de usuario"class="form-control4 ">
                </div>
              </div>
  						<div class="form-row">
  							<div class="col-lg-7">
  								<button type="submit" class="btn1" name="agregar_usuario">Registrar</button>
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