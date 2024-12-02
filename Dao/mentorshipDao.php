<?php
    class MentorshipsDAO{
        public $conn;
        //Função apra registrar novas mentorias
        public function __construct()
        {
            include_once('../../Config/Database.php');
            $database = new Database();
            $this->conn = $database->getCon();
        }

        function mentorShipRegistration(Mentorships $mentorship) {
        
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
                feedback,
                valor,
                data_inicio,
                duracao
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            
            $stmt = $this->conn->prepare($sql);
        
            $stmt->execute([
                $mentorship->getTitle(),
                $mentorship->getDesc(),
                $mentorship->getTarget(),
                $mentorship->getGoals(),
                $mentorship->getContent(),
                $mentorship->getFreq(),
                $mentorship->getRequi(),
                $mentorship->getMethod(),
                $mentorship->getTeacher(),
                $mentorship->getPlace(),
                $mentorship->getFeedback(),
                $mentorship->getPrice(),
                $mentorship->getDateBegin()->format('Y-m-d'), // Converte DateTime para string
                $mentorship->getDuration()
            ]);

       
        }
        
        


    

        //Função para buscar mentorias do banco
        function fetchMentorships(){
            
            $query = "SELECT * FROM mentorias WHERE isActive = 1";
            //prepara, se eu nao me engano contra SQL INJECTION
            $stmt = $this->conn -> prepare($query);
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
            
            //QUERY SQL - desativa as mentorias de acordo com o id
            $query = "UPDATE mentorias SET isActive = '0' WHERE id = '$id'";
            //prepara contra injeção SQL
            $stmt = $this -> conn -> prepare($query);
            //executa
            $stmt -> execute();
        }


        // isso auqi redefine as informações
        function updateMentorship($idMentorship, $data) {
           
            // Inicializa a query de update
            $query = "UPDATE mentorias SET ";
            $fields = [];
        
            if (!empty($data->title)) $fields[] = "titulo = :title";
            if (!empty($data->goal)) $fields[] = "objetivos = :goal";
            if (!empty($data->description)) $fields[] = "descricao = :description";
        
            // Adiciona apenas os campos que foram alterados
            $query .= implode(", ", $fields) . " WHERE id = :id";
                // $duration = $data->duration;
            // $target = $data->target;
            // $frequency = $data->frequency;
            // $period = $data->period;
            // $requirements = $data->requirements;
            // $date_begin = $data->date_begin;
            // $teacher = $data->teacher;
            // $mode = $data->mode;
        
            // $content = $data->content;
            // $methods = $data->methods;
            // $place = $data->place;
            // $payment = $data->payment;
            // $feedback = $data->feedback;
            // $price = $data->price;
            $stmt = $this -> conn -> prepare($query);
            $stmt->bindParam(':id', $idMentorship, PDO::PARAM_INT);
            if (!empty($data->title)) $stmt->bindParam(':title', $data->title, PDO::PARAM_STR);
            if (!empty($data->goal)) $stmt->bindParam(':goal', $data->goal, PDO::PARAM_STR);
            if (!empty($data->description)) $stmt->bindParam(':description', $data->description, PDO::PARAM_STR);
        
            $stmt->execute();
        }

    }
?>
