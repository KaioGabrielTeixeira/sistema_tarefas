<?php
require_once 'controllers/taskController.php';

if (isset($_GET['id'])) {
    $controller = new TaskController();
    $controller->completed($_GET['id']);
}

header('Location: index.php');
exit;
?>