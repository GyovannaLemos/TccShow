<?php
include_once('/xampp/htdocs/TesteTCC2/model/conexao.php');
include_once('/xampp/htdocs/TesteTCC2/model/modelAluno.php');


extract($_REQUEST, EXTR_OVERWRITE);

if (inserirAluno()) {
    header("Location: ../view/login.php");
} else {
    header("Location: ../view/login.php");
}
