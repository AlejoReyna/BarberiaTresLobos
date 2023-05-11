<?php
require_once 'Controllers/UsuarioControllers.php';

if(isset($_POST) && $_POST['btnRegistro'] ){
    
    // resivimos los datos que se enviaron por el formulario e iniciamos un controlador
    $registroUsuario = new UsuarioController();
    $registroUsuario->save();

}