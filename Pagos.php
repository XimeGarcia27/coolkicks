<?php
// include database configuration file
include 'Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: detalles.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 8;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM clientes WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagos - PHP Carrito de compras Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <style>
    .container{padding: 20px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation"><a href="principal.php">Inicio</a></li>
  <li role="presentation"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation" class="active"><a href="Pagos.php">Pagos</a></li>
</ul>
</div>

<div class="panel-body">
    <h1>Vista previa de la Orden</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Pricio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' MXN'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' MXN'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carta......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' MXN'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Detalles de envío</h4>
        <p>Nombre: <?php echo $custRow['names']; ?></p>
        <p>Correo: <?php echo $custRow['email']; ?></p>
        <p>Teléfono: <?php echo $custRow['phone']; ?></p>
        <p>Dirección: <?php echo $custRow['addres']; ?></p>
    </div>
    <div class="footBtn">
        <a href="principal.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
        <a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
        <!-- Set up a container element for the button -->
        <div id="paypal-button-container" style="width: 200px; margin-left:60em; margin-top: .5em;"></div>
        
    </div>
        </div>
 </div><!--Panek cierra-->
 <div class="panel-footer">COOLKICKS</div>
</div>




<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=AdOAGhVxIJIEuZ_wxgzrUdF4RxRfQXGcBe0WTfk04DMH0-joI2q1W9vc9EOEhgxsAtm3C2L2UQsbYksL&currency=MXN"></script>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        style: {
            color:  'blue',
            shape:  'pill',
            label:  'pay',
            height: 40,
            
        }

    }).render('#paypal-button-container');
</script>

</body>
</html>