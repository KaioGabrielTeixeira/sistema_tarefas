<?php
require_once __DIR__ . '/controllers/taskController.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $controller = new taskController();
    $controller->delete($id); // Chama o método para excluir a tarefa
}

header('Location: index.php');
exit;
?>  