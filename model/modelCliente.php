<?php

session_start();

include_once './conexao.php';

function inserirCliente()
{
    $conn = new Conexao();

    $nome = $_POST['txt_NomeClient'];
    $sexo = $_POST['cmb_Sexo'];
    $data = $_POST['dt_DtNasc'];
    $cod = $_POST['cod'];

    $query = 'CALL Sp_Inserir_Cliente(:nome, :sexo, :data, :codigo_usuario)';

    $clientes = [];

    $cadCliente = $conn->getConn()->prepare($query);

    $cadCliente->bindParam(':nome', $nome, PDO::PARAM_STR);
    $cadCliente->bindParam(':sexo', $sexo, PDO::PARAM_STR);
    $cadCliente->bindParam(':data', $data, PDO::PARAM_STR);
    $cadCliente->bindParam(':codigo_usuario', $cod, PDO::PARAM_INT);

    $cadCliente->execute();

    $clientes = $cadCliente->fetchAll(PDO::FETCH_ASSOC);

    print_r($clientes);
}
