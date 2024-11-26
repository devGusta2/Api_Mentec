<?php
    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Buscando dados vindo do forms do REACT JS
        $data = json_decode(file_get_contents('php://input'));
        //busca o id da mentoria que vai ser atualizada
        $idMentorship = $data -> id;
        //obtem o diretorio das mentorias
        include_once('../../Model/Mentorships/Mentorships.php');
        //cria objeto das mentorias
        $mentorships = new Mentorships();
        //busca o método de update
        $mentorships -> updateMentorship($idMentorship, $data);
     
    }

?>