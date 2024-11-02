<?php
require_once 'User.php';
require_once 'Database.php';

public class Aunthenticator{
    // atributos
    private $db;
    // construtor
    public function __construct() {
        $this -> $db = new Database(); 
    }
    // metodo de autenticação
    public function authenticate($email, $password){
        $con = $this->db->getCon();
        // query sql
        $query = "SELECT * FROM tbUser WHERE :email AND :password";
        $stmt = $con->prepare($query);
        
    }
}

?>