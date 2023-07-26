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
    <title>Mujeres</title>
</head>

<body>
    <header>
        <div class="contenedor">
                <h1>Coolkicks</h1>
            <input type="checkbox" id="menu-bar">
            <label class="icoan-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="index.html">Inicio de Sesión/Registro</a>
                <a href="principal.php">Principal</a>
                <a href="hombres.php">Hombres</a>
                <a href="mujeres.php">Mujeres</a>
                <a href="contacto.html">Contactanos</a>
                <a href="VerCarta.php"><img class="imgBarra" src="assets/img/carrito.png"></a>
            </nav>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>

    <main>
        <section id="catalogo">
            <div class="contenedor">

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[22]['id'];?>">
                 <img src="assets/img/<?php print($temp[22]['img']);?>"></a> 
                    <h3><?php print  $temp[22]['name'];?></h3>
                    <p><?php print "$". $temp[22]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[23]['id'];?>">
                 <img src="assets/img/<?php print($temp[23]['img']);?>"></a> 
                    <h3><?php print  $temp[23]['name'];?></h3>
                    <p><?php print "$". $temp[23]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[24]['id'];?>">
                 <img src="assets/img/<?php print($temp[24]['img']);?>"></a> 
                    <h3><?php print  $temp[24]['name'];?></h3>
                    <p><?php print "$". $temp[24]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[25]['id'];?>">
                 <img src="assets/img/<?php print($temp[28]['img']);?>"></a> 
                    <h3><?php print  $temp[25]['name'];?></h3>
                    <p><?php print "$". $temp[25]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[26]['id'];?>">
                 <img src="assets/img/<?php print($temp[26]['img']);?>"></a> 
                    <h3><?php print  $temp[26]['name'];?></h3>
                    <p><?php print "$". $temp[26]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[27]['id'];?>">
                 <img src="assets/img/<?php print($temp[27]['img']);?>"></a> 
                    <h3><?php print  $temp[27]['name'];?></h3>
                    <p><?php print "$". $temp[27]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[29]['id'];?>">
                 <img src="assets/img/<?php print($temp[29]['img']);?>"></a> 
                    <h3><?php print  $temp[29]['name'];?></h3>
                    <p><?php print "$". $temp[29]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[30]['id'];?>">
                 <img src="assets/img/<?php print($temp[30]['img']);?>"></a> 
                    <h3><?php print  $temp[30]['name'];?></h3>
                    <p><?php print "$". $temp[30]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[31]['id'];?>">
                 <img src="assets/img/<?php print($temp[31]['img']);?>"></a> 
                    <h3><?php print  $temp[31]['name'];?></h3>
                    <p><?php print "$". $temp[31]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[32]['id'];?>">
                 <img src="assets/img/<?php print($temp[32]['img']);?>"></a> 
                    <h3><?php print  $temp[32]['name'];?></h3>
                    <p><?php print "$". $temp[32]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[33]['id'];?>">
                 <img src="assets/img/<?php print($temp[33]['img']);?>"></a> 
                    <h3><?php print  $temp[33]['name'];?></h3>
                    <p><?php print "$". $temp[33]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[34]['id'];?>">
                 <img src="assets/img/<?php print($temp[34]['img']);?>"></a> 
                    <h3><?php print  $temp[34]['name'];?></h3>
                    <p><?php print "$". $temp[34]['price'];?></p>
                </article>

            </div>
        </section>
    </main>
</body>

</html>