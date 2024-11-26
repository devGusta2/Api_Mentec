<?php
    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos

    
    //função que regista as mmentorias
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        
        //pega só o método que foi chamado do raectj
        $method = $data -> action;
        if($method == 'createMentorship'){
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

        }else if($method == 'updateMentorship'){
     
            
        }else{
            
                     
        }
        
    }



//função para buscar mentorias na model
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include_once('../../Model/Mentorships/Mentorships.php');
    $mentorships = new Mentorships();
    $data = $mentorships -> fetchMentorships();

    echo json_encode($data);

}
    


    
?>