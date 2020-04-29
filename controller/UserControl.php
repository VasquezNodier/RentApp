<?php

class UserControl {
    
    public static function obtener_usuarioo($conexion,$correo,$pasword) {
        $usuarios = null;
        if (isset($conexion)) {
            try {
                include_once ('../model/Usuarios.php');
                $sql = "SELECT * FROM usuarios WHERE correo_user = :a AND password_user= :b";
                $sentencia = $conexion->prepare($sql);
                
                $sentencia->bindParam(':a', $correo, PDO::PARAM_STR);
                $sentencia->bindParam(':b', $pasword, PDO::PARAM_STR);
                
                $sentencia->execute();
                $resultado = $sentencia->fetch();
               if (!empty($resultado)) {
                    $usuarios = new Usuarios($resultado['id_user'], $resultado['nombres_user'], $resultado['edad_user'], $resultado['sexo_user'], $resultado['tipo_user'], $resultado['tel_user'], $resultado['dir_user'], $resultado['correo_user'], $resultado['password_user']);
                }
            } catch (PDOException $ex) {
                print "ERROR: " . $ex->getMessage();
            }
        }else{
            echo 'no hayconeion';
        }

        return $usuarios;
    }

    public static function obtener_numero_usuarios($conexion) {
        $total_usuarios = null;

        if (isset($conexion)) {
            try {
                $sql = "select count(*) as total from usuarios";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $total_usuarios = $resultado['total'];
            } catch (Exception $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }

        return $total_usuarios;
    }

    public static function insertar_usuario($conexion, $usuario) {
        $usuario_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO usuarios(cedula, nombres, edad, genero, email, direccion, telefono, usuario, pasword, tipousuario) VALUES(:cedula, :nombres, :edad, :genero, :email, :direccion, :telefono, :usuario, :pasword , 1)";
                $sentencia = $conexion->prepare($sql);

                $cedulatemp = $usuario->getCedula();
                $nomtemp = $usuario->getNombres();
                $edadtemp = $usuario->getEdad();
                $generotemp = $usuario->getGenero();
                $emailtemp = $usuario->getEmail();
                $diretemp = $usuario->getDireccion();
                $teletemp = $usuario->getTelefono();
                $usutemp = $usuario->getUsuario();
                $pastemp = $usuario->getPasword();
//                $tipousuariotem = $usuario->getTipousuario();//hacer el get si no error

                $sentencia->bindParam(':cedula', $cedulatemp, PDO::PARAM_STR);
                $sentencia->bindParam(':nombres', $nomtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':edad', $edadtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':genero', $generotemp, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $emailtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $diretemp, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $teletemp, PDO::PARAM_STR);
                $sentencia->bindParam(':usuario', $usutemp, PDO::PARAM_STR);
                $sentencia->bindParam(':pasword', $pastemp, PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $usuario_insertado;
    }

    public static function insertar_usuariop($conexion, $usuario) {
        $usuario_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO usuarios(cedula, nombres, edad, genero, email, direccion, telefono, usuario, pasword, tipousuario) VALUES(:cedula, :nombres, :edad, :genero, :email, :direccion, :telefono, :usuario, :pasword , 2)";
                $sentencia = $conexion->prepare($sql);

                $cedulatemp = $usuario->getCedula();
                $nomtemp = $usuario->getNombres();
                $edadtemp = $usuario->getEdad();
                $generotemp = $usuario->getGenero();
                $emailtemp = $usuario->getEmail();
                $diretemp = $usuario->getDireccion();
                $teletemp = $usuario->getTelefono();
                $usutemp = $usuario->getUsuario();
                $pastemp = $usuario->getPasword();
//                $tipousuariotem = $usuario->getTipousuario();//hacer el get si no error

                $sentencia->bindParam(':cedula', $cedulatemp, PDO::PARAM_STR);
                $sentencia->bindParam(':nombres', $nomtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':edad', $edadtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':genero', $generotemp, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $emailtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $diretemp, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $teletemp, PDO::PARAM_STR);
                $sentencia->bindParam(':usuario', $usutemp, PDO::PARAM_STR);
                $sentencia->bindParam(':pasword', $pastemp, PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }

        return $usuario_insertado;
    }
    public static function traer_usuario_parqueadero($conexion) {
        $usuario2 = [];

        $id = '2';
        
//        include_once 'Usuario.inc.php';

        if (isset($conexion)) {
            try {
//                include_once 'app/Usuario.inc.php';

                $sql = "SELECT * FROM usuarios WHERE tipousuario LIKE :usu";

                $sentencia = $conexion->prepare($sql);

                $sentencia -> bindParam(':usu' , $id , PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

//                $var = count($resultado);
//                echo $var;

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuario2[] = new Usuario($fila['cedula'], $fila['nombres'], $fila['edad'], $fila['genero'], $fila['email'], $fila['direccion'], $fila['telefono'], $fila['usuario'], $fila['pasword'], $fila['tipousuario']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario2;
    }

    public static function usuario_existe($conexion, $usuario) {
        $nombre_existe = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";

                $sentencia = $conexion->prepare($sql);

//                $usuariotemp = $usuario->getUsuario();
                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $nombre_existe = true;
                } else {
                    $nombre_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $nombre_existe;
    }

    public static function email_existe($conexion, $email) {
        $email_existe = true;

        if (isset($conexion)) {
            try {


                $sql = "SELECT * FROM usuarios WHERE email = :email";

                $sentencia = $conexion->prepare($sql);

//                $emailtemp = $email->getEmail();
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $email_existe = true;
                } else {
                    $email_existe = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $email_existe;
    }

    public static function obtener_usuario($conexion, $usuario) {
        $usuario2 = null;

        if (isset($conexion)) {
            try {

                include_once 'paquetemodelos/Usuario.inc.php';

                $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetch();
                if (!empty($resultado)) {
                    $usuario2 = new Usuario($resultado['cedula'], $resultado['nombres'], $resultado['edad'], $resultado['genero'], $resultado['email'], $resultado['direccion'], $resultado['telefono'], $resultado['usuario'], $resultado['pasword'], $resultado['tipousuario']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario2;
    }

    public static function obtener_usuario_pp($conexion, $usuario) {
        $usuario2 = [];

        if (isset($conexion)) {
            try {

                include_once 'paquetemodelos/Usuario.inc.php';

                $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetch();
                if (!empty($resultado)) {
                    $usuario2[] = new Usuario($resultado['cedula'], $resultado['nombres'], $resultado['edad'], $resultado['genero'], $resultado['email'], $resultado['direccion'], $resultado['telefono'], $resultado['usuario'], $resultado['pasword'], $resultado['tipousuario']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario2;
    }
    
    //estos datos son de prueba si no sirve eliminar 
    
    public static function obtener_usuario_parqueadero($conexion, $usuario) {
        $usuario2 = [];

        if (isset($conexion)) {
            try {

                include_once 'paquetemodelos/Usuario.inc.php';

                $sql = "SELECT * FROM usuarios WHERE cedula = $usuario";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetch();
                if (!empty($resultado)) {
                    $usuario2[] = new Usuario($resultado['cedula'], $resultado['nombres'], $resultado['edad'], $resultado['genero'], $resultado['email'], $resultado['direccion'], $resultado['telefono'], $resultado['usuario'], $resultado['pasword'], $resultado['tipousuario']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario2;
    }
    
    // hasta aca se elimina
    

    public static function obtener_usuario_contraseña($conexion, $email) {
        $usuario2 = null;

        if (isset($conexion)) {
            try {

                include_once 'paquetemodelos/Usuario.inc.php';

                $sql = "SELECT * FROM usuarios WHERE email = :email";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);

                $sentencia->execute();

                $resultado = $sentencia->fetch();
                if (!empty($resultado)) {
                    $usuario2 = new Usuario($resultado['cedula'], $resultado['nombres'], $resultado['edad'], $resultado['genero'], $resultado['email'], $resultado['direccion'], $resultado['telefono'], $resultado['usuario'], $resultado['pasword'], $resultado['tipousuario']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $usuario2;
    }
    
    public static function editar_perfil ($conexion, $email, $direccion, $telefono, $usuario, $contraseña, $idusuario){
        $usuario_modificado = false;
        
        if(isset($conexion)){
            try {
                
                $sql = "UPDATE usuarios SET  email = '$email' , direccion ='$direccion' , telefono='$telefono', usuario = '$usuario', pasword='$contraseña' WHERE cedula='$idusuario'";
                
                $sentencia = $conexion->prepare($sql);
                
                $usuario_modificado = $sentencia -> execute();
                
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        
        return $usuario_modificado;
    }
    
    
    public static function encryptar($string,$clavescreta,$iv){
        
        define('METHOD' , 'AES-256-CBC');
        define('SECRET_KEY' , $clavescreta );
        define('SECRET_IV' , $iv);
        
        $output=FALSE;
        $key = hash('sha256',SECRET_KEY);
        $ivv = substr(hash('sha256',SECRET_IV),0,16);
        $output = openssl_encrypt($string, METHOD, $key, 0, $ivv);
        $output = base64_encode($output);
        return $output;
    }    

    public static function desencriptar($pas,$clavescreta,$iv){
        define('METHOD' , 'AES-256-CBC');
        define('SECRET_KEY' , $clavescreta );
        define('SECRET_IV' , $iv);
        
        $key = hash('sha256', SECRET_KEY);
        $ivv = substr(hash('sha256', SECRET_IV),0,16);
        $ouput = openssl_decrypt(base64_decode($pas), METHOD, $key, 0 , $ivv);
        return $ouput;
    }
    
}

?>
