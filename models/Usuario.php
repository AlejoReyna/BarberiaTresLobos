<?php

class Usuario{
    
    private $name;
    private $lastName;
    private $email;
    private $password;
    
    // getters
    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lastName;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }

    // setters

    public function setName($name){
        $this->name = $name;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function save(){
        // aqui se hara una consulta a la base de datos
    }

}