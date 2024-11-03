<?php
class User{
    //atributos
    protected string $email;
    protected string $password;
    protected string $name;
    protected string $cpf;
    
    // Metodos setters
    public function setEmail($email){
        $this ->email = $email;
    }
    public function setPassword($password){
        $this ->password = $password;
    }


    // Metodos getters

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this -> $password;
    }
}

?>