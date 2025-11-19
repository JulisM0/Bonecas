<?php

class Banco {
    private $host = "localhost";
    private $database = "bonecas";
    private $username = "root";
    private $password = "";
    private $conexao;

    public function conn() {
        $this->conexao = null;
        try {

            $this->conexao = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->database,
                $this->username,
                $this->password
            );

            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $erro) {
            echo "Erro na conexão: " . $erro->getMessage();
        }

        return $this->conexao;
    }
}

?>
