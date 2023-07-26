<?php
    include('conexion.php');

    $obj = new Conexion;

    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $tel = $_POST['telefono'];
    $msg = $_POST['mensaje'];

   $comentario = $obj->insertarComentario($name, $email, $tel, $msg);
   if($comentario == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>