<?php
header("Access-Control-Allow-Origin: http://localhost:3000"); // Permitir acesso apenas do front-end
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos permitidos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Buscando dados vindo do forms do REACT JS
    $data = json_decode(file_get_contents('php://input'));
    //transforma em vetor

    $title = $data->title;
    $goal = $data->goal;
    $description = $data->description;
    $target = $data->target;
    $goal = $data->goal;
    $content = $data->content;
    $frequency = $data->frequency;
    $requirements = $data->requirements;
    $methods = $data->methods;
    $teacher = $data->teacher;
    $place = $data->place;
    $payment = $data->payment;
    $feedback = $data->feedback;
    $price = $data->price;
    $date_begin = $data->date_begin;
    $duration = $data->duration;
    // $data = [

    //     $data-> title,
    //     //$data-> nome,
    //     $data-> description,
    //     $data-> target,
    //     $data-> goal,
    //     $data-> content,
    //     $data-> frequency,
    //     $data-> requirements,
    //     $data-> methods,
    //     $data-> teacher,
    //     $data-> place,
    //     $data-> payment,
    //     $data-> feedback,
    //     $data-> price,
    //     $data-> date_begin,
    //     $data-> duration,
    // ];
    //busca o diretorio da model
    include_once('../../Model/Mentorships/Mentorships.php');
    //cria o ojeto de mentorias
    $mentorships = new Mentorships();
    //busca o método de criar mentorias
    $mentorships -> mentorShipRegistration($title, $goal, $description, $target, $content, $frequency, $requirements, $methods, $teacher, $place, $payment, $feedback, $price, $date_begin, $duration);
}
?>