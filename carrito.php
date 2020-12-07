
<?php include("include/header.php");

$total = 0;
$del = false;


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
   
    <?php
     if(isset($_GET['uid'])) {
        $pid = $_GET['uid'];
        
        $query = "SELECT * FROM carrito WHERE idusuario =$pid ";
        $result_solicitud = mysqli_query($conexion,$query);

        while($row = mysqli_fetch_array($result_solicitud)) { ?>
            <tr>
                <td><?php echo $row['nombre']?></td>
                <td>$<?php echo $row['precio']?> MXN</td>
                <td><img src=<?php echo $row['imagen']?> id="imagen-carrito"></td>
                <td><a href="eliminar_carrito.php?uid=<?php echo $pid ?>&id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></td>

               
         
        </tr>

        <?php  
    
   $total = $total + $row['precio'] ;
     
    }   
    } else{} ?> 
</tbody>
<tr>
<td><h3>Total:</h3></td>
<td><h3>$<?php echo $total?> MXN</h3></td>
</tr>
</table>


     <style>
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        
        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
            }
        }
    </style>

    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=MXN"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo $total ?>'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                   window.location = "borrar_carrito.php?uid=<?php echo $pid?>"
                });
            }
           
        }).render('#paypal-button-container');
    </script>

    


























</div>
</div>
</body>

