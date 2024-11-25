<?php
    header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
    header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos

    



    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        include_once('../../Model/Mentorships/Mentorships.php');
        $mentorships = new Mentorships();
        $data = $mentorships -> fetchMentorships();
 
        echo json_encode($data);
    }
    //Buscando Mentorias


//     //função que regista as mmentorias
//     if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
//         $data = json_decode(file_get_contents('php://input'));
//         //Buscando dados vindo do forms do REACT JS

//         //transforma em vetor
//         $data = [
          
//             $data-> title,
//             //$data-> nome,
//             $data-> description,

//             $data-> target,

//             $data-> goal,

//             $data-> content,

//             $data-> frequency,

//             $data-> requirements,

//             $data-> methods,

//             $data-> teacher,

//             $data-> place,

//             $data-> payment,

//             $data-> feedback,

//             $data-> price,

//             $data-> date_begin,

//             $data-> duration,
            
//         ];


// //função para buscar mentorias na model





//         //instancia
//         //$mentoring = new Mentorships();
//         $dao = new Database();
        
//         //define a conexao;
//         $conn = $dao -> getCon();

//         $sql = "INSERT INTO mentorias (
//             titulo, 
//             descricao,
//             publico_alvo, 
//             objetivos,
//             conteudo_programatico, 
//             frequencia,
//             requisitos,
//             metodologia,
//             instrutor,
//             local,
//             forma_pagamento,
//             feedback,
//             valor,
//             data_inicio,
//             duracao
//         ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
//         $stmt = $conn->prepare($sql);
//         $stmt->execute([
//             $data[0], $data[1], $data[2], $data[3], $data[4], $data[5],
//             $data[6], $data[7], $data[8], $data[9], $data[10], $data[11],
//             $data[12], $data[13], $data[14]
//         ]);
        
//         //obtem os dados vindo do JSON
        


//         //$mentoring -> mentorShipRegistration(foreach($data));
//     }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
}
    
?>