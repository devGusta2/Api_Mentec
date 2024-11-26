<?php
    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos
    

    //desativando mentorias
    //recebe os dados do REACT
    $data = json_decode(file_get_contents('php://input'));
    //define o id da mentoria
    $id = $data -> id;
    //busca o diretório no MODEL referente as mentorias
    include_once('../../Model/Mentorships/Mentorships.php');
    //cria novo objeto de mentorias
    $mentorships = new Mentorships();
    //busca o método de delete
    $mentorships -> deactivateMentorship($id);
    
?>