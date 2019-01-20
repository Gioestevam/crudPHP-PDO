<?php
    require_once '../class/crud.php';

    $crud = new crud;

    if (isset($_POST['nome']) && $_POST['email'] && $_POST['senha']) {

        $nome   = $_POST['nome'];
        $email  = $_POST['email'];
        $senha  = $_POST['senha'];
            

        $crud->insert(
            'pessoa',
            'nome, email, senha',
            ':nome, :email, :senha',
            array(
                ':nome' => $nome,
                ':email' => $email,
                ':senha' => sha1(md5($senha))
            )
        );
        
    } 

?>