<?php
require_once 'User.php';
require_once 'Database.php';

class Aunthenticator{
    // atributos
    private $db;
    // construtor
    public function __construct() {
        $this -> $db = new Database(); 
    }
    // metodo de login
    public function login($email, $password){
        $con = $this->db->getCon();
        // query sql
        $query = "SELECT * FROM tbUser WHERE :email AND :password";
        $stmt = $con->prepare($query);
        $stmt -> execute();
    }

    public function authentication(){
        
    }
}

?>