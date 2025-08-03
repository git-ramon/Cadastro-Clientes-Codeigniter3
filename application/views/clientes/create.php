<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Adicionar Cliente</title>
</head>
<body>
    <div class="bg-info text-white py-3 mb-4">
        <div class="container">
            <h1 class="h3 m-0 text-center">Adicionar Clientes</h1>
        </div>
    </div>

    <div class="container">

    <form action="<?= site_url('clientes/store') ?>" method="post">

        <label class="form-label">Nome</label><br>
        <input type="text" class="form-control w-50" name="nome" required>

        <label class="form-label">Email</label><br>
        <input type="email" class="form-control w-50" name="email" required>

        <label class="form-label">Telefone</label><br>
        <input type="text" class="form-control w-50" name="telefone" required><br>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?= site_url('clientes') ?>" class="btn btn-secondary">Cancelar</a>
    </form>

    </div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
