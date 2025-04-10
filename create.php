<?php
require_once __DIR__ . '/controllers/taskController.php';

$controller = new taskController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifica se o formulário foi enviado.
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    if (!empty($titulo) && !empty($descricao)) {
        $controller->create($titulo, $descricao);
        header('Location: index.php'); // Redireciona de volta para a lista depois de salvar.
        exit;
    } else {
        $erro = "Preencha todos os campos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Tarefa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Nova Tarefa</h1>

        <?php if (isset($erro)): ?>
            <div class="alert alert-danger" role="alert">
                <?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <form action="create.php" method="post" class="bg-white p-4 rounded shadow-sm">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="4" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">← Voltar</a>
                <button type="submit" class="btn btn-primary">Criar Tarefa</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>