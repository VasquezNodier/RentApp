<?php

class ControlSesion {

    public static function iniciar_sesion($id_usuario, $nombre_usuario, $tipo_usuario, $email) {
        if (session_id() == '') {
            session_start();
        }
        
        $_SESSION['id_user'] = $id_usuario;
        $_SESSION['nombres_user'] = $nombre_usuario;
        $_SESSION['tipo_user'] = $tipo_usuario;
        $_SESSION['email_user'] = $email;
    }
    
    
    public static function cerrar_sesion(){
        if (session_id() == '') {
            session_start();
        }
        
        if(isset($_SESSION['id_user'])){
            unset($_SESSION['id_user']);
        }
        if(isset($_SESSION['nombres_user'])){
            unset($_SESSION['nombres_user']);
        } 
        if(isset($_SESSION['tipo_user'])){
            unset($_SESSION['tipo_user']);
        }
        
        if(isset($_SESSION['email_user'])){
            unset($_SESSION['email_user']);
        }
        
        session_destroy();
    }
    
    public static function sesion_iniciada() {
        if(session_id()== ''){
            session_start();
        }
        if(isset($_SESSION['id_user']) && isset($_SESSION['nombres_user']) && isset($_SESSION['tipo_user']) && isset($_SESSION['email_user'])){
            return true;
        }else{
            return false;
        }
    }

}