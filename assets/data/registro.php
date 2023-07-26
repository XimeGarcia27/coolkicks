<?php
    include('conexion.php');

    $obj = new Conexion;

    $nombre = $_POST['nombreRegistro'];
    $apellidos = $_POST['apellidosRegistro'];
    $usuario = $_POST['usuarioRegistro'];
    $correo = $_POST['emailRegistro'];
    $telefono = $_POST['telefonoRegistro'];
    $direccion = $_POST['direccionRegistro'];
    $contra = $_POST['contrasenyaRegistro'];
    
    $res = $obj->insertarUsuario($nombre, $apellidos, $usuario, $correo, $telefono, $direccion, $contra);
    
    if($res == 1){
        $datos = array('dato' => 'ok');
    }else{
        $datos = array('dato' => 'no');
    }
   
    echo json_encode($datos, JSON_FORCE_OBJECT);
?>