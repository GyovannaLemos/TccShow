<?php

session_start();

include_once './conexao.php';

function inserirProfessor()
{
    $conn = new Conexao();

    $nome = $_POST['txt_NomeProfessor'];
    $sexo = $_POST['cmb_Sexo'];
    $nascimento = $_POST['dt_Nasc_Professor'];
    $matricula = $_POST['txt_Matricula'];
    $componente = $_POST['cmb_Componente'];
    $cod = $_POST['cod'];
    $query = 'CALL Sp_Inserir_Professor(:nome, :componente, :nascimento, :sexo, :matricula, :codigo_usuario)';

    $professores = [];

    $cadProfessor =  $conn->getConn()->prepare($query);

    $cadProfessor->bindParam(':nome', $nome, PDO::PARAM_STR);
    $cadProfessor->bindParam(':componente', $componente, PDO::PARAM_STR);
    $cadProfessor->bindParam(':nascimento', $nascimento, PDO::PARAM_STR);
    $cadProfessor->bindParam(':sexo', $sexo, PDO::PARAM_STR);
    $cadProfessor->bindParam(':matricula', $matricula, PDO::PARAM_INT);
    $cadProfessor->bindParam(':codigo_usuario', $cod, PDO::PARAM_INT);


    $cadProfessor->execute();

    $professores = $cadProfessor->fetchAll(PDO::FETCH_ASSOC);

    print_r($professores);
}
