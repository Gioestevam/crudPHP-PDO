<?php 
    require_once 'includes/header.php'; 
    require_once 'class/crud.php';

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $crud = new crud;

    $fetch = $crud->selectById(
        'pessoa',
        'nome, email, senha, pessoa_id',
        'pessoa_id = :pessoa_id',
        array(
            ':pessoa_id' => $id 
        )
    );

    $fetchById = $fetch->fetch(PDO::FETCH_ASSOC);
    
?>

<div class="container">
    <h1>Editar cadastro</h1>
    <form method="POST" action="controllers/editar.php">
        <input type="hidden" name="pessoa_id" value="<?= $fetchById['pessoa_id'] ?>" >
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?= $fetchById['nome'] ?>" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"  name="email" value="<?= $fetchById['email'] ?>" class="form-control" id="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="senha" value="<?= $fetchById['senha'] ?>" class="form-control" id="password" placeholder="senha">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<?php require_once 'includes/footer.php' ?>
