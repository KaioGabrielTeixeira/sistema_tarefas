<?php
require_once __DIR__ . '/controllers/taskController.php';

$controller = new taskController();
$tasks = $controller->list();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Tarefas</h1>
        <ul class="list-group">
            <?php foreach ($tasks as $t): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong><?= htmlspecialchars($t['titulo']) ?></strong> - 
                        <?= htmlspecialchars($t['descricao']) ?>
                        <span class="badge bg-<?= $t['concluida'] ? 'success' : 'warning' ?> text-white">
                            <?= $t['concluida'] ? 'Concluída' : 'Pendente' ?>
                        </span>
                    </div>
                    <div>
                        <?php if ($t['concluida']): ?>
                            <a href="task_reopen.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-warning">Reabrir</a>
                        <?php else: ?>
                            <a href="task_completed.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-success">Concluir</a>
                        <?php endif; ?>
                        <a href="delete.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-danger ms-2" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">Excluir</a>
                    </div>
                    <script>
                        console.log("onclick")
                    </script>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="mt-4 text-center">
            <a href="create.php" class="btn btn-primary">Criar nova Tarefa</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>