<?php
	 include('assets/data/conexion.php');

	 $obj = new Conexion;

     $res =  $obj->detalles();
 
	 $temp = array();
 
	 $temp =$res;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolkicks</title>
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/estilospares.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
</head>

<header>
    <div class="contenedor">
        <a href="principal.php">
            <h1>Coolkicks</h1>
        </a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
            <a href="hombres.php">Hombres</a>
            <a href="mujeres.php">Mujeres</a>
            <a href="contacto.html">Contactanos</a>
            <a href="VerCarta.php"><img src="assets/img/carrito.png"></a>
        </nav>
    </div>
</header>


<main>
    <section id="contenedor-cat">
    <h3 class="titulo-us"><?php print $temp[0]['name'];?></h3>
        <div class="Contenedor-cat">    

            <img class="imagen-us" src="assets/img/<?php print $temp[0]['img'];?>">

            <div class="Contenedor-informacion">

                <p>$<?php print $temp[0]['price'];?></p>
                <p><?php print $temp[0]['description'];?></p>

                <a class="boton" target="_blank" href="AccionCarta.php?action=addToCart&id=<?php echo $temp[0]["id"]; ?>">Agregar a la bolsa de compra</a>
               
                <div class="desplegable">
               
                    
                <form action="../../form-result.php" target="_blank">

<p>
    <button class="boton2" > Talla</button>

     
    <select name="talla" style="margin-top: auto; ">
    <option>2.5</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>

  </select>

</p>

</form>
                </div>

            </div>
        </div>
    </section>
    <body>

        <footer>
            <div class="contenedor">
                <p class="copy">Coolkicks &copy; 2020</p>
                <div class="sociales">
                    <a class="icon-facebook" href="https://www.facebook.com/"></a>
                    <a class="icon-twitter" href="#"></a>
                    <a class="icon-instagram" href="#"></a>
                </div>
            </div>
        </footer>
    </body>

</html>