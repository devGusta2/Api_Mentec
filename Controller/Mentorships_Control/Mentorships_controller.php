<?php
    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos

    include_once('../../Model/Mentorships/Mentorships.php');
    include_once('../../Model/Dao/Database.php');
    //função que regista as mmentorias
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = json_decode(file_get_contents('php//input'));

        //instancia
        $mentoring = new Mentorships();
        $dao = new Database();
        
        //define a conexao;
        $conn = $dao -> getCon();


        $mentoring -> mentorShipRegistration();
    }
    
?>