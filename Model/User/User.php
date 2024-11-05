<?php
class User{
    //atributos
    protected string $email;
    protected string $password;
    protected string $name;

    
    // Metodos setters
    public function setEmail($email){
        $this ->email = $email;
    }
    public function setPassword($password){
        $this ->password = $password;
    }
    public function setName($name){
        $this-> name= $name;
    }

    // Metodos getters

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this -> password;
    }
    public function getName(){
        return $this->name;
    }

    public function registration(){

    }
    
}

?>