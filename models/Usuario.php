<?php

class Usuario{
    
    private $name;
    private $lasName;
    private $email;
    private $password;
    
    // getters
    public function getName(){
        return $this->name;
    }

    public function getLastName(){
        return $this->lasName;
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

    public function setLasName($lasName){
        $this->lasName = $lasName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

}