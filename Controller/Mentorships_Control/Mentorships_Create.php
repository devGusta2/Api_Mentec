<?php
    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Buscando dados vindo do forms do REACT JS
        $data = json_decode(file_get_contents('php://input'));
        //transforma em vetor
        $data = [
     
            $data-> title,
            //$data-> nome,
            $data-> description,
            $data-> target,
            $data-> goal,
            $data-> content,
            $data-> frequency,
            $data-> requirements,
            $data-> methods,
            $data-> teacher,
            $data-> place,
            $data-> payment,
            $data-> feedback,
            $data-> price,
            $data-> date_begin,
            $data-> duration,
        ];
        //busca o diretorio da model
        include_once('../../Model/Mentorships/Mentorships.php');
        //cria o ojeto de mentorias
        $mentorships = new Mentorships();
        //busca o método de criar mentorias
        $mentorships -> mentorShipRegistration($data);
    }
?>