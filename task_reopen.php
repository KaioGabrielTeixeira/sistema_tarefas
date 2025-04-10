<?php
require_once __DIR__ . '/controllers/taskController.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $controller = new taskController();
    $controller->reopen($id); // Chama o método correto para reabrir a tarefa
}

header('Location: index.php');
exit;
?>