<?php
include_once('../Database.php');
//class aluno usando os atributos da classe user
class Aluno extends User{

    public function cadastro(){
        // cria objeto da conexao com o banco
        $dao = new Database();
        // pega o metodo da conexao
        $conn = $dao -> getCon();

        $query = "INSERT INTO tbUser ( 
        lastNameUser, --ultimo nome
        roleUser, --papel do usuario no caso fica entre (Mentor, Aluno e Adm)
        
        )VALUES($nameUser, $roleUser)";

    }

}

?>