<?php

class Database {
    // Variáveis de conexão com o banco de dados
    private string $nome = "sql100.infinityfree.com";
    private string $password = "mentec8080";
    private string $user = "if0_37802286";
    private string $database = "if0_37802286_mentecdb";
    // Variável da conexão
    private ?PDO $con = null;

    public function getCon(): ?PDO {
        try {
            $this->con = new PDO(
                "mysql:host=" . $this->nome . ";dbname=" . $this->database,
                $this->user,
                $this->password
            );
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erro na conexão: " . $exception->getMessage();
            $this->con = null; // Define como null se a conexão falhar
        }
        return $this->con;
    }
}

?>
