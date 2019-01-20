<?php

    require_once '../class/crud.php';

    $crud = new crud;

    if (isset($_POST['nome']) && $_POST['email'] && $_POST['senha'] && $_POST['pessoa_id'] ) {

        $nome   = $_POST['nome'];
        $email  = $_POST['email'];
        $senha  = $_POST['senha'];
        $id     = $_POST['pessoa_id'];

        $crud->updateById(
            'pessoa',
            'nome = :nome, email = :email, senha = :senha',
            'pessoa_id = :pessoa_id',
            array(
                ':nome' => $nome,
                ':email' => $email,
                ':senha' => $senha,
                ':pessoa_id' => $id
            )
        );

    } 

?>