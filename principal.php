<?php
	 include('assets/data/conexion.php');

	 $obj = new Conexion;

     $res =  $obj->buscarProducto();
 
     $temp = array();
 
     $temp =$res;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Coolkicks</title>
</head>

<body>
    <header>
        <div class="contenedor">
            <a href="principal.php">
                <h1>Coolkicks</h1>
            </a>
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="index.html">Inicio de Sesión/Registro</a>
                <a href="principal.php">Principal</a>
                <a href="hombres.php">Hombres</a>
                <a href="mujeres.php">Mujeres</a>
                <a href="contacto.html">Contactanos</a>
                <a href="VerCarta.php"><img src="assets/img/carrito.png"></a>
            </nav>
        </div>
    </header>

    <main>
        <section id="banner">
            <img class="bannerimg" src="assets/img/19875-nike.jpg">
            <div class="contenedor">
            </div>
        </section>

        <section id="catalogo">
            <h2 id="conocenos">Lo último en sneakers</h2>
            <div class="contenedor">

            <article>
                    <a href="detalles.php?id=<?php print $temp[14]['id'];?>">
                    <img src="assets/img/<?php print($temp[14]['img']);?>"></a>
                    <h3><?php print  $temp[14]['name'];?></h3>
                    <p><?php print "$". $temp[14]['price'];?></p>
                </article>

                <article>
                    <a href="detalles.php?id=<?php print $temp[3]['id'];?>">
                    <img src="assets/img/<?php print($temp[3]['img']);?>"></a>
                    <h3><?php print  $temp[3]['name'];?></h3>
                    <p><?php print "$". $temp[3]['price'];?></p>
                </article>

                <article>
                    <a href="detalles.php?id=<?php print $temp[7]['id'];?>">
                    <img src="assets/img/<?php print($temp[7]['img']);?>"></a>
                    <h3><?php print  $temp[7]['name'];?></h3>
                    <p><?php print "$". $temp[7]['price'];?></p>
                </article>
            </div>
        </section>

        <section id="info">
            <h3>Gran variedad de calzado de gran nivel a tu alcance.</h3>
            <div class="contenedor">
                <div class="info-shoes mov">
                <a href="detalles.php?id=<?php print $temp[5]['id'];?>">
                    <img src="assets/img/<?php print($temp[5]['img']);?>"></a>
                </div>
                <div class="info-shoes mov">
                <a href="detalles.php?id=<?php print $temp[20]['id'];?>">
                    <img src="assets/img/<?php print($temp[20]['img']);?>"></a>
                </div>
                <div class="info-shoes mov">
                <a href="detalles.php?id=<?php print $temp[13]['id'];?>">
                    <img src="assets/img/<?php print($temp[13]['img']);?>"></a>
                </div>
                <div class="info-shoes mov">
                <a href="detalles.php?id=<?php print $temp[23]['id'];?>">
                    <img src="assets/img/<?php print($temp[23]['img']);?>"></a>
                </div>
            </div>
        </section>
    </main>


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