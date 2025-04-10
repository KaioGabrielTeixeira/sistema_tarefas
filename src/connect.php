<?php
class Connect {
    private $host = 'localhost';
    private $dbname = 'sistema_tarefas';
    private $user = 'root';
    private $pass = '';
    private $conn;

    public function getConnection(){
        try{
            $conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e){
            echo "Erro de conexão: " . $e->getMessage();
        }
    }
}
?>