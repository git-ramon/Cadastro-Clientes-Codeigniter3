<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Lista de Clientes</title>
</head>
<body>

<div class="bg-info text-white py-3 mb-4">
    <div class="container">
        <h1 class="h3 m-0 text-center">Lista de Clientes</h1>
    </div>
</div>

<div class="container">

<a href="<?php echo site_url('clientes/create'); ?>" class="btn btn-success">Cadastrar Novo Cliente</a><br><br>
    
<form action="<?= site_url('clientes') ?>" method="get" class="d-flex align-items-center mb-3">
    <button type="submit" class="btn btn-warning me-2">Pesquisar</button>
    <input type="text" name="busca" class="form-control w-50" placeholder="Pesquisar por nome" value="<?php echo $this->input->get('busca'); ?>" />
</form>        

<?php if ($this->input->get('success')): ?>
    <div class="alert alert-success" role="alert">
        Cliente adicionado com sucesso!
    </div>
<?php elseif ($this->input->get('error')): ?>
    <div class="alert alert-danger" role="alert">
        Erro ao adicionar cliente!
    </div>
<?php elseif ($this->input->get('updated')): ?>
    <div class="alert alert-warning" role="alert">
        Cliente atualizado com sucesso!
    </div>
<?php elseif ($this->input->get('deleted')): ?>
    <div class="alert alert-danger" role="alert">
        Cliente excluído com sucesso!
    </div>
<?php endif; ?>


<?php if (!empty($clientes)) : ?>
    <table border="1" cellpadding="5" cellspacing="0" class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente->id ?></td>
                <td><?= htmlspecialchars($cliente->nome) ?></td>
                <td><?= htmlspecialchars($cliente->email) ?></td>
                <td><?= htmlspecialchars($cliente->telefone) ?></td>
                <td>
                    <a href="<?= site_url('clientes/editar/'.$cliente->id) ?>" class="btn btn-warning">Editar</a> |
                    <a href="<?= site_url('clientes/excluir/'.$cliente->id) ?>" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Nenhum cliente encontrado.</p>
<?php endif; ?>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
