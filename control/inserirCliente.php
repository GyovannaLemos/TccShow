<?php
include_once('../model/conexao.php');
include_once('../model/modelCliente.php');


extract($_REQUEST, EXTR_OVERWRITE);

if (inserirCliente()) {
    header("Location: ../view/login.php");
} else {
    header("Location: ../view/login.php");
}
