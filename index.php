<?php
    require_once 'crud.php';
    $crud = new crud();
    // $crud->insert(
    //     "pessoa",
    //     "nome, email, senha",
    //     ":nome, :email, :senha",
    //     array(
    //         ":nome" => "Giovanni Estevam",
    //         ":email" => "giovanniestevam98@gmail.com",
    //         ":senha" => "8801821833015"
    //     )
    // );

    // $crud->updateById(
    //     "pessoa",
    //     "nome = :nome, senha = :senha",
    //     "pessoa_id = :id",
    //     array(
    //         ":id" => 1,
    //         ":nome" => "Gioestevam",
    //         ":senha" => "123"
    //     )
    // );

    // $crud->deleteById(
    //     "pessoa",
    //     "pessoa_id = :id",
    //     array(
    //         ":id" => 2
    //     )
    // );

    // $fetchSelect = $crud->selectById(
    //     "pessoa",
    //     "nome, email, created_at",
    //     "pessoa_id = :id",
    //     array(
    //         ":id" => 3
    //     )
    // );

    // $fetch = $fetchSelect->fetch(PDO::FETCH_ASSOC);
    // echo json_encode($fetch);

    // $fetchSelect = $crud->selectAll(
    //     "pessoa",
    //     "nome, email, created_at"
    // );

    // while($fetch = $fetchSelect->fetch(PDO::FETCH_ASSOC)) {
    //     echo json_encode($fetch);
    // }
    
    // $crud->deleteAll("pessoa");

?>