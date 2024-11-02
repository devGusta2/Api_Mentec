<?php
public class User{
    //atributos
    private string $email;
    private string $password;
    private string $name;
    private string $cpf;
    
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