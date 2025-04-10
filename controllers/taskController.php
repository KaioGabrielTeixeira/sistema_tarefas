<?php
require_once __DIR__ . '/../src/task.php';

class taskController
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new Task();
    }

    public function list()
    {
        return $this->taskModel->list();
    }

    public function create($titulo, $descricao)
    {
        return $this->taskModel->create($titulo, $descricao);
    }

    public function reopen($id)
    {
        // Verifica se o ID fornecido é válido
        if ($id > 0) {
            // Atualiza o status da tarefa para "não concluída" (0)
            return $this->taskModel->updateStatus($id, 0);
        }
    
        // Lança uma exceção caso o ID seja inválido
        throw new InvalidArgumentException("ID inválido para reabrir a tarefa.");
    }

    public function completed($id)
    {
        return $this->taskModel->completed($id);
    }

    public function delete($id)
    {
        return $this->taskModel->delete($id);
    }
}
