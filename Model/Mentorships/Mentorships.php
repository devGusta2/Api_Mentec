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








    //Função apra registrar novas mentorias

    function mentorShipRegistration($data){
        include_once('../../Model/Dao/Database.php');
        $dao = new Database();
        
        //define a conexao;
        $conn = $dao -> getCon();

        $sql = "INSERT INTO mentorias (
            titulo, 
            descricao,
            publico_alvo,  
            objetivos,
            conteudo_programatico, 
            frequencia,
            requisitos,
            metodologia,
            instrutor,
            local,
            forma_pagamento,
            feedback,
            valor,
            data_inicio,
            duracao
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $data[0], $data[1], $data[2], $data[3], $data[4], $data[5],
            $data[6], $data[7], $data[8], $data[9], $data[10], $data[11],
            $data[12], $data[13], $data[14]
        ]);
    }
     
    


   

    //Função para buscar mentorias do banco
    function fetchMentorships(){
        include_once('../../Model/Dao/Database.php');
        //cria um novo objeto de banco de dados
        $dao = new Database();
        //obtem a coxão com o banco 
        $conn = $dao -> getCon();
        //como vou buscar as mentorias 
        $query = "SELECT * FROM mentorias WHERE isActive = 1";
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
        $query = "UPDATE mentorias SET isActive = '0' WHERE id = '$id'";
        //prepara contra injeção SQL
        $stmt = $conn -> prepare($query);
        //executa
        $stmt -> execute();
    }

    
    //Função para redefinir as informações
    function updateMentorship($idMentorship, $data) {
        // Validações ou carregamento do objeto da base
        $this->setTitle($data['title']);
        $this->setDesc($data['description']);
        $this->setTarget($data['target']);
        $this->setGoals($data['goals']);
        $this->setContent($data['content']);
        $this->setFreq($data['frequency']);
        $this->setRequi($data['requirements']);
        $this->setMethod($data['methods']);
        $this->setTeacher($data['teacher']);
        $this->setPlace($data['place']);
        $this->setPayment($data['payment']);
        $this->setPrice($data['price']);
        $this->setDate_begin($data['date_begin']);
        $this->setDuration($data['duration']);
        
        // Salvar no banco de dados (exemplo)
        // $this->saveToDatabase($idMentorship);
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