<?php
require_once __DIR__ . '/connect.php';

class Task{
    private $conn;

    public function __construct(){
        $db = new Connect();
        $this->conn = $db->getConnection();
    }

    public function list(){
        $sql = "SELECT id, titulo, descricao, concluida, data_criacao FROM tarefas";
        $smt = $this->conn->query($sql);
        return $smt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($titulo, $descricao, $concluida = 0){
        $sql = "INSERT INTO tarefas (titulo, descricao, concluida) VALUES (:titulo, :descricao, :concluida)";
        $smt = $this->conn->prepare($sql);
        return $smt->execute([
            ':titulo' => $titulo,
            ':descricao' => $descricao,
            ':concluida' => $concluida
        ]);
    } 

    public function completed($id){
        $sql = "UPDATE tarefas SET concluida = 1 WHERE id = :id";
        $smt = $this->conn->prepare($sql);
        return $smt->execute([':id' => $id]);
    }

    public function delete($id){
        $sql = "DELETE FROM tarefas WHERE id = :id";
        $smt = $this->conn->prepare($sql);
        return $smt->execute([':id' => $id]);
    }

    public function updateStatus($id, $status) {
        $sql = "UPDATE tarefas SET concluida = :status WHERE id = :id";
        $smt = $this->conn->prepare($sql);
        return $smt->execute([
            ':status' => $status,
            ':id' => $id
        ]);
    }
}
?>