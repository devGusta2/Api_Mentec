<?php

    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Buscando dados vindo do forms do REACT JS
            include_once('../../Model/Mentorships/Mentorships.php');
            $data = json_decode(file_get_contents('php://input'));
            
            $mentorship = new Mentorships(
                 // ID pode ser gerado automaticamente no banco
                $data->title,
                $data->description,
                $data->target,
                $data->goal,
                $data->content,
                $data->frequency,
                $data->requirements,
                $data->methods,
                $data->teacher,
                $data->place,
                $data->feedback,
                $data->price,
                new DateTime($data->date_begin),
                $data->duration
            ); 
            include_once("../../Dao/mentorshipDao.php");
            $dao = new MentorshipsDAO();
            $dao -> mentorShipRegistration($mentorship);
    }
?>