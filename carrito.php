
<?php include("include/header.php");

include("db/localhost.php");?>
<body class = "cyan">

<br>
    
<div class="col-md-8">
<table class="table  table-light">
<thead>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Imagen</th>
    
    </tr>
</thead>
<tbody>
    if(isset($_GET['uid'])) {
    <?php
        $pid = $_GET['uid'];

        $query = "SELECT * FROM carrito WHERE idusuario =$pid ";
        $result_solicitud = mysqli_query($conexion,$query);

        while($row = mysqli_fetch_array($result_solicitud)) { ?>
            <tr>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['precio']?></td>
                <td><img src=<?php echo $row['imagen']?> id="imagen-carrito"></td>
                <td><button>Eliminar</button></td>
         
        </tr>

        <?php   } } else{} ?>
</tbody>
</table>

<button>Pagar</button>



























</div>
</div>
</body>

