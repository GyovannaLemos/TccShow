<?php

session_start();

include_once './conexao.php';

function inserirAluno()
{
    $conn = new Conexao();

    $nome = $_POST['cxNomeAluno'];
    $sexo = $_POST['cmb_Sexo'];
    $data = $_POST['cx_DtNasc'];
    $escola = $_POST['cmb_Escola'];
    $rm = $_POST['cx_RM'];
    $curso = $_POST['cmb_Curso'];
    $modulo = $_POST['cmb_Modulo'];
    $cod = $_POST['cod'];

    $query = 'CALL Sp_Inserir_Aluno(:nome, :sexo, :data, :escola, :rm, :curso, :modulo, :codigo_usuario)';

    $alunos = [];

    $cadAluno = $conn->getConn()->prepare($query);

    $cadAluno->bindParam(':nome', $nome, PDO::PARAM_STR);
    $cadAluno->bindParam(':sexo', $sexo, PDO::PARAM_STR);
    $cadAluno->bindParam(':data', $data, PDO::PARAM_STR);
    $cadAluno->bindParam(':escola', $escola, PDO::PARAM_STR);
    $cadAluno->bindParam(':rm', $rm, PDO::PARAM_INT);
    $cadAluno->bindParam(':curso', $curso, PDO::PARAM_STR);
    $cadAluno->bindParam(':modulo', $modulo, PDO::PARAM_STR);
    $cadAluno->bindParam(':codigo_usuario', $cod, PDO::PARAM_INT);

    $cadAluno->execute();

    $alunos = $cadAluno->fetchAll(PDO::FETCH_ASSOC);

    print_r($alunos);
}
