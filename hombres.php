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

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


    <title>Hombres</title>
</head>

<body>
    <header>
        <div class="contenedor">
                <h1>Coolkicks</h1>
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
    <br>
    <br>
    <br>
    <br>

    <main>
        <section id="catalogo">
            <div class="contenedor">

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[1]['id'];?>">
                    <img src="assets/img/<?php print($temp[1]['img']);?>"></a>
                    <h3><?php print  $temp[1]['name'];?></h3>
                    <p><?php print "$". $temp[1]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[2]['id'];?>">
                    <img src="assets/img/<?php print($temp[2]['img']);?>"></a>
                    <h3><?php print  $temp[2]['name'];?></h3>
                    <p><?php print "$". $temp[2]['price'];?></p>
                    
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[3]['id'];?>">
                    <img src="assets/img/<?php print($temp[3]['img']);?>"></a>
                    <h3><?php print  $temp[3]['name'];?></h3>
                    <p><?php print "$". $temp[3]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[4]['id'];?>">
                    <img src="assets/img/<?php print($temp[4]['img']);?>"></a>
                    <h3><?php print  $temp[4]['name'];?></h3>
                    <p><?php print "$". $temp[4]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[5]['id'];?>">
                    <img src="assets/img/<?php print($temp[5]['img']);?>"></a>
                    <h3><?php print  $temp[5]['name'];?></h3>
                    <p><?php print "$". $temp[5]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[6]['id'];?>">
                    <img src="assets/img/<?php print($temp[6]['img']);?>"></a>
                    <h3><?php print  $temp[6]['name'];?></h3>
                    <p><?php print "$". $temp[6]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[7]['id'];?>">
                    <img src="assets/img/<?php print($temp[7]['img']);?>"></a>
                    <h3><?php print  $temp[7]['name'];?></h3>
                    <p><?php print "$". $temp[7]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[8]['id'];?>">
                    <img src="assets/img/<?php print($temp[8]['img']);?>"></a>
                    <h3><?php print  $temp[8]['name'];?></h3>
                    <p><?php print "$". $temp[8]['price'];?></p>
                </article>
                

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[9]['id'];?>">
                    <img src="assets/img/<?php print($temp[9]['img']);?>"></a>
                    <h3><?php print  $temp[9]['name'];?></h3>
                    <p><?php print "$". $temp[9]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[10]['id'];?>">
                    <img src="assets/img/<?php print($temp[10]['img']);?>"></a>
                    <h3><?php print  $temp[10]['name'];?></h3>
                    <p><?php print "$". $temp[10]['price'];?></p>
                </article>

                <article class="mov">
                <a href="detalles.php?id=<?php print $temp[11]['id'];?>">
                    <img src="assets/img/<?php print($temp[11]['img']);?>"></a>
                    <h3><?php print  $temp[11]['name'];?></h3>
                    <p><?php print "$". $temp[11]['price'];?></p>
                </article>

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[12]['id'];?>">
                    <img src="assets/img/<?php print($temp[12]['img']);?>"></a>
                    <h3><?php print  $temp[12]['name'];?></h3>
                    <p><?php print "$". $temp[12]['price'];?></p>
                </article>

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[13]['id'];?>">
                    <img src="assets/img/<?php print($temp[13]['img']);?>"></a>
                    <h3><?php print  $temp[13]['name'];?></h3>
                    <p><?php print "$". $temp[13]['price'];?></p>
                </article>

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[14]['id'];?>">
                    <img src="assets/img/<?php print($temp[14]['img']);?>"></a>
                    <h3><?php print  $temp[14]['name'];?></h3>
                    <p><?php print "$". $temp[14]['price'];?></p>
                </article>

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[15]['id'];?>">
                    <img src="assets/img/<?php print($temp[15]['img']);?>"></a>
                    <h3><?php print  $temp[15]['name'];?></h3>
                    <p><?php print "$". $temp[15]['price'];?></p>
                </article>

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[16]['id'];?>">
                    <img src="assets/img/<?php print($temp[16]['img']);?>"></a>
                    <h3><?php print  $temp[16]['name'];?></h3>
                    <p><?php print "$". $temp[16]['price'];?></p>
                </article>

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[17]['id'];?>">
                    <img src="assets/img/<?php print($temp[17]['img']);?>"></a>
                    <h3><?php print  $temp[17]['name'];?></h3>
                    <p><?php print "$". $temp[17]['price'];?></p>
                </article>

                <article class="mov">
                    <a href="detalles.php?id=<?php print $temp[18]['id'];?>">
                    <img src="assets/img/<?php print($temp[18]['img']);?>"></a>
                    <h3><?php print  $temp[18]['name'];?></h3>
                    <p><?php print "$". $temp[18]['price'];?></p>
                </article>

            </div>
        </section>
    </main>

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  -->
</body>

</html>