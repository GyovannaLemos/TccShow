<?php
session_start();

include_once './conexao.php';
$conn = new Conexao();

$nome = $_POST['txt_NomeUser'];
$email = $_POST['txt_Email'];
$senha = $_POST['txt_Senha'];
$opcao = ['cos' => 8];
$senha = password_hash($senha, PASSWORD_BCRYPT, $opcao);
$tipo = $_POST['cmb_Tipo'];



$query = 'CALL Sp_Inserir_Usuario(:nome, :email, :senha, :tipo)';

$usuarios = [];

$cadUsuario = $conn->getConn()->prepare($query);

$cadUsuario->bindParam(':nome', $nome, PDO::PARAM_STR);
$cadUsuario->bindParam(':email', $email, PDO::PARAM_STR);
$cadUsuario->bindParam(':senha', $senha, PDO::PARAM_STR);
$cadUsuario->bindParam(':tipo', $tipo, PDO::PARAM_STR);

$cadUsuario->execute();

$usuarios = $cadUsuario->fetchAll(PDO::FETCH_ASSOC);

print_r($usuarios);

if ($tipo == 'user') {
    $queryCliente = "SELECT * FROM `tb_usuario` ORDER BY `cod_usuario` DESC LIMIT 1";


    $resultadoCliente = $conn->getConn()->prepare($queryCliente);
    $resultadoCliente->closeCursor();
    $resultadoCliente->execute();

    while ($listarCliente = $resultadoCliente->fetch(PDO::FETCH_ASSOC)) {
        $cod = $listarCliente['cod_usuario'];

        header('Location: ../view/cadastro/cadCliente.php?cod=' . $cod);
    }
}

if ($tipo == 'aluno') {
    $queryAluno = "SELECT * FROM `tb_usuario` ORDER BY `cod_usuario` DESC LIMIT 1";


    $resultadoAluno = $conn->getConn()->prepare($queryAluno);
    $resultadoAluno->closeCursor();
    $resultadoAluno->execute();

    while ($listarAluno = $resultadoAluno->fetch(PDO::FETCH_ASSOC)) {
        $cod = $listarAluno['cod_usuario'];
    }

    header('Location: ../view/cadastro/cadAluno.php?cod=' . $cod);
}

if ($tipo == 'prof') {

    $query = "SELECT * FROM `tb_usuario` ORDER BY `cod_usuario` DESC LIMIT 1";


    $resultado = $conn->getConn()->prepare($query);
    $resultado->closeCursor();
    $resultado->execute();

    while ($listar = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $cod = $listar['cod_usuario'];
    }

    header('Location: ../view/cadastro/cadProfessor.php?cod=' . $cod);

    // $data = $stmt->execute();





    // foreach($date as $row){
    //     print_r($row);
    // }
    // header('Location: ../view/cadastro/cadProfessor.php?'.$row);

}
