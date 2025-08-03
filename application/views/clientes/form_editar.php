<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Editar Clientes</title>
</head>
<body>

    <div class="bg-info text-white py-3 mb-4">
        <div class="container">
            <h1 class="h3 m-0 text-center">Editar Clientes</h1>
        </div>
    </div>

    <div class="container">

    <form action="<?= site_url('clientes/atualizar/'.$cliente->id) ?>" method="post">
        
            <label class="form-label">Nome</label><br>
            <input class="form-control w-50" type="text" name="nome" value="<?= $cliente->nome ?>" required>
        
            <label class="form-label">Email</label><br>
            <input class="form-control w-50" type="email" name="email" value="<?= $cliente->email ?>" required>
        
            <label class="form-label">Telefone</label><br>
            <input class="form-control w-50" type="text" name="telefone" value="<?= $cliente->telefone ?>" required><br>
        
            <button type="submit" value="Atualizar" class="btn btn-warning">Atualizar</button>
            <a href="<?= site_url('clientes') ?>" class="btn btn-secondary">Cancelar</a>

    </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


