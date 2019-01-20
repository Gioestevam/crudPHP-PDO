<?php require_once 'includes/header.php' ?>

<div class="container">
    <h1>Cadastrar</h1>
    <form method="POST" action="controllers/cadastro.php">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"  name="email" class="form-control" id="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="senha" class="form-control" id="password" placeholder="senha">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php require_once 'includes/footer.php' ?>
