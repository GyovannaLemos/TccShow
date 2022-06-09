<?php
include_once('../model/conexao.php');
include_once('../model/modelAluno.php');


extract($_REQUEST, EXTR_OVERWRITE);

if (inserirAluno()) {
    header("Location: ../view/login.php");
} else {
    header("Location: ../view/login.php");
}
