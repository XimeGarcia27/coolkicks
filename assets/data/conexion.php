<?php
   class Conexion{
       var $con;

       function conectar(){
           $con = null;
            try{
             $con = new PDO('mysql:host=localhost;dbname=COOLKICKS', 'root', '');
             //maneja los errores
             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
             //echo 'se establecio la conexión<br><br>';

            }catch(PDOException $e){
              die('Error conectado con la base de datos: '
                . $e->getMessage());
            }
        return $con;
       }

        //Buscar usuarios registrados en la Base de Datos
        function buscarUsuario($user, $pass){
            $con = $this->conectar();
            $consulta = 'SELECT name_usu
                         FROM clientes	
                         WHERE name_usu=:user
                         AND contrasena=:pass';
             $stmt = $con->prepare($consulta);
             $stmt->execute(array(':user'=>$user,':pass'=>$pass));
             $registro = $stmt->fetchALL(PDO::FETCH_ASSOC);            
             $numRegistros = count($registro);
 
             return $numRegistros;
         }

        function buscarProducto(){
           $con = $this->conectar();

           $consulta = 'SELECT * FROM mis_productos';

           $stmt = $con->prepare($consulta);
           $stmt->execute();
           $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 
         
           json_encode($registros, JSON_FORCE_OBJECT);

            return $registros;
        }
        
        function detalles(){
            $con = $this->conectar();
 
            $consulta = 'SELECT * FROM mis_productos WHERE id='.$_GET['id'];

            $stmt = $con->prepare($consulta);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 
          
             json_encode($registros, JSON_FORCE_OBJECT);
 
             return $registros;

        }
       
        //Insertar comentarios en la Base de Datos
        function insertarComentario($name, $email, $tel, $msg){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'INSERT INTO contacto 
                        (nombre, correo, tel, mensaje)
                         VALUES (:nombre, :correo, :telefono, :mensaje)'; 
            $stmt = $con->prepare($consulta);
            $rows = $stmt->execute(array(':nombre'=>$name,
                                ':correo'=>$email,
                                ':telefono'=>$tel,
                                ':mensaje'=>$msg));
            return $rows;
        }

         //Registrar usuarios en la Base de Datos
         function insertarUsuario($nombre, $apellidos, $usuario, $correo, $telefono, $direccion, $contra){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'INSERT INTO clientes
                        (names,apellido,name_usu,email,phone,addres,contrasena)
                         VALUES (:nombre, :apellidos, :usuario, :correo, :telefono, :direccion, :contra)'; 

            $stmt = $con->prepare($consulta);
            $rows = $stmt->execute(array(':nombre'=>$nombre,
                                ':apellidos'=>$apellidos,
                                ':usuario'=>$usuario,
                                ':correo'=>$correo,
                                ':telefono'=>$telefono,
                                ':direccion'=>$direccion,
                                ':contra'=>$contra));
            return $rows;
        }
   }
   ?>