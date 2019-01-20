<?php
    require_once '../class/crud.php';

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

    $crud = new crud;

    $crud->deleteById(
        'pessoa',
        'pessoa_id = :pessoa_id',
        array(
            ':pessoa_id' => $id
        )
    );

?>