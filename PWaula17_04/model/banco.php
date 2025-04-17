<?php

define('BD_SERVIDOR', 'localhost');
define('BD_USUARIO', 'root');
define('BD_SENHA', '');
define('BD_BANCO', 'projetotoweb');

class Banco {
    protected $mysqli;

    public function __contruct() {
        $this->conexao();
    }

    public function conexao() {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

        if ($this->mysqli->connect_error) {
            die("Erro na conexão: " . $this->mysqli->connect_error);
        }
    }

    public function agendamento($nome, $telefone, $origem, $data_contato, $observacao) {
        $stmt = $this->mysqli->prepare("INSERT INTO agendamentos (`nome`, `telefone`, `origem`, `data_contato`, `observacao`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nome, $telefone, $origem, $data_contato, $observacao);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
