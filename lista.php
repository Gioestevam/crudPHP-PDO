<?php 
    require_once 'includes/header.php';
    require_once 'class/crud.php';

    $crud = new crud;
    $fetchAll = $crud->selectAll(
        'pessoa',
        'nome, email, pessoa_id'
    );
    $index = 1;
?>

<div class="container"> 
    <h1>Lista de pessoa</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php while($fetch = $fetchAll->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <th scope="row"><?= $index++ ?></th>
                    <td><?= $fetch['nome']?></td>
                    <td><?= $fetch['email']?></td>
                    <td>
                        <a href="<?= "editar.php?id={$fetch['pessoa_id']}" ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="fas fa-edit"></span>
                            </button>
                        </a>
                        <a href="<?= "controllers/deleta.php?id={$fetch['pessoa_id']}" ?>">
                            <button type="button" class="btn btn-danger">
                                <span class="fas fa-trash"></span>
                            </button>
                        </a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php require_once 'includes/footer.php' ?>