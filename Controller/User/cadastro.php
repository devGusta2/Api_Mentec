<?php
header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos
include('../../Model/Database.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = json_decode(file_get_contents('php://input'));
    $dao = new Database();
    $conn = $dao->getCon();
    $nome= $data->nome;
    $email= $data->email;
    $tel= $data->tel;
    $stmt= "INSERT INTO user (nome,num, email) VALUES ('$nome','$tel','$email')";
    $stmt = $conn ->prepare($stmt);
    $stmt->execute();
}


?>try{
            const deactivateResponse = await axios.post('http://localhost/Api_mentec/controller/Mentorships_control/Mentorships_controller.php', idMentorship);
        }catch(error){
            console.log("Erro", error);
        }