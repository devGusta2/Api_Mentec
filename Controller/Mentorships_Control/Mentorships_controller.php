<?php
    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos


//função para buscar mentorias na model
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include_once('../../Dao/mentorshipDao.php');
    $mentorships = new MentorshipsDAO();
    $data = $mentorships -> fetchMentorships();

    echo json_encode($data);

}
    


    
?>