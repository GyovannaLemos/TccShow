<?php
include_once('/xampp/htdocs/TesteTCC2/model/conexao.php');
include_once('/xampp/htdocs/TesteTCC2/model/modelCliente.php');


extract($_REQUEST, EXTR_OVERWRITE);

if (inserirCliente()) {
    header("Location: ../view/index.php");
} else {
    header("Location: ../view/index.php");
}
