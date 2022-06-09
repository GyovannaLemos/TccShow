<?php
include_once('../model/conexao.php');
include_once('../model/modelProfessor.php');


extract($_REQUEST, EXTR_OVERWRITE);

if (inserirProfessor()) {
    header("Location: ../view/login.php");
} else {
    header("Location: ../view/login.php");
}
