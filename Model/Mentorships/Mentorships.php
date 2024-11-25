<?php


class Mentorships{
    private string $title;
    private string $description;
    private string $target; //publico alvo
    private string $goals;
    private string $content;
    private string $frequnecy; // semanal, diário, mensal ...
    private string $requirements;
    private string $methods;
    private string $teacher;
    private string $place;
    private string $payment;
    private string $feedback;

    private float $price;
    private DateTime $date_begin;    
    private int $duration;


    public function setTitle($title){
        $this->title = $title;
    }
    public function setDesc($description){
        $this->description = $description;
    }
    public function setTarget($target){
        $this->target = $target;
    }
    public function setGoals($goals){
        $this->goals = $goals;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function setFreq($frequnecy){
        $this->frequency=$frequnecy;
    }
    public function setRequi($requirements){
        $this->requirements = $requirements;
    }
    public function setMethod($methods){
        $this->methods = $methods;
    }
    public function setTeacher($teacher){
        $this->teacher = $teacher;
    }
    public function setPlace($place){
        $this->place = $place;
    }
    public function setPayment($feedback){
        $this->feedback = $feedback;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setDate_begin($date_begin){
        $this->date_begin = $date_begin;
    }
    public function setDuration($duration){
        $this->duration = $duration;
    }

    //metodos getters
    public function getTitle(){
        return $this->title;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getTarget(){
        return $this->target;
    }
    public function getGoals(){
        return $this->goals;
    }
    public function getContent(){
        return $this->content;
    }
    public function getFreq(){
        require $this->frequency;
    }
    public function getRequi() {
        return $this->requirements;
    }

    public function getMethod() {
        return $this->methods;
    }

    public function getTeacher() {
        return $this->teacher;
    }

    public function getPlace() {
        return $this->place;
    }

    public function getFeedback() {
        return $this->feedback;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDateBegin() {
        return $this->date_begin;
    }

    public function getDuration() {
        return $this->duration;
    }



    function mentorShipRegistration(
        $title,
        $description,
        $target,
        $goals,
        $content,
        $frequency,
        $requirements,
        $methods,
        $teacher,
        $place,
        $payment,
        $feedback,
        $price,
        $date_begin,
        $duration,
        ){
        //instancia a conexão
        $dao = new Database();
        // pega o metodo de buscar a conexao
        $conn = $dao->getCon();

        //SQL
        $query = "INSERT INTO Mentorias(
            titulo, 
            descricao, 
            publico_alvo, 
            objetivos, 
            conteudo_programatico, 
            duracao, 
            frequencia, 
            requisitos, 
            metodologia, 
            instrutor, 
            data_inicio, 
            local, 
            valor, 
            forma_pagamento, 
            feedback
        ) VALUES (
            
        )";

    }


   

    //Função para buscar mentorias do banco
    function fetchMentorships(){
        include_once('../../Model/Dao/Database.php');
        //cria um novo objeto de banco de dados
        $dao = new Database();
        //obtem a coxão com o banco 
        $conn = $dao -> getCon();
        //como vou buscar as mentorias 
        $query = "SELECT * FROM mentorias";
        //prepara, se eu nao me engano contra SQL INJECTION
        $stmt = $conn -> prepare($query);
        //executa
        $stmt -> execute();
        //armazenando os dados em array
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);  // Pega todos os dados do banco de dados
        // Agora, use o array $res para preencher o array $formattedData
        $formattedData = [];  // Inicialize o array formattedData corretamente
        
        foreach ($res as $mentorship) {  // Itere sobre $res, que contém os dados da consulta
            $formattedData[] = [
                'id' => $mentorship['id'],
                'title' => $mentorship['titulo'],
                'description' => $mentorship['descricao'],
                'goals' => $mentorship['objetivos'],
                'duration' => $mentorship['duracao'],
            ];
        }
        return $formattedData;
    }


    function deactivateMentorship($id){
        //incluindo o diretório onde está a conexao com o banco
        include_once('../../Model/Dao/Database.php');
        //criando objeto da conexao com o banco
        $dao = new Database();
        //criando a variavel de conexao com o banco
        $conn = $dao -> getCon();
        //QUERY SQL - desativa as mentorias de acordo com o id
        $query = "UPDATE mentorias SET isActive = 'False' WHERE id = '$id'";
    }

}




//conteuco
//frequencia
//metodologia

//requisitos

//instrutor

//data inicio
//local
//valor
//form pgto
//feedback


?>