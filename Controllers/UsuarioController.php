<?php 

// Brayant Flores
//Metodos para las funciones de los usuarios como login y registro 

class UsuarioController{
    
    public function index(){
        return 'funcion principal del controlador';
    }

    public function save(){
        
        $name = $_POST['nombre'];
        $lastName = $_POST['lasName'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $Usuario = new Usuario();
        $Usuario->setName($name);
        $Usuario->setLastName($lastName);
        $Usuario->setEmail($email);
        $Usuario->setPassword($password);
        $Usuario->save();

    }

    public function login(){
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        $login = new Usuario();
        $login->setName($userName);
        $login->setPassword($password);
        $login->login();

    }

}