<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta Tags Obrigatórias -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> TCC Show </title>

    <!-- Icone na head-->
    <link rel="shortcut icon" href="/TesteTCC2/view/images/headIcone.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.1-dist/css/bootstrap.min.css" />
    <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.js"> </script>
    <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"> </script>

    <!-- Arquivo CSS Style -->
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/repositorio.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>

    <?php
    include_once("../include/navBar.php");
    ?>
    <main class="fundo" id="fundo">
        <div class="rep-alinhamento">
            <div class="rep_form mb-4">
                <div class="rep_borda">
                    <form action="listarprojetos.php" class="row g-3" method="POST">
                        <h1 class="titulo-rep">Repositório de trabalhos!</h1>
                        <div class="col-sm-4">
                            <label for="curso" class="form-label">Ano e semestre</label>
                            <select required name="ano" id="ano" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)">
                                <option value="" selected disabled>Selecione...</option>
                                <option value="2021-1">2021 - 1°Semestre</option>
                                <option value="2021-2">2021 - 2°Semestre</option>
                                <option value="2021-2">2022 - 1°Semestre</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="curso" class="form-label">Curso</label>
                            <select required name="curso" id="curso" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)">
                                <option value="" selected disabled>Selecione...</option>
                                <option value="Adm">Administração</option>
                                <option value="DS">Desenvolvimento de sistemas</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="modulo" class="form-label">Módulo</label>
                            <select required name="modulo" id="modulo" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)">
                                <option value="" selected disabled>Selecione...</option>
                                <option value="1">1° Módulo</option>
                                <option value="2">2° Módulo</option>
                                <option value="3">3° Módulo</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <center><button class="botao-procurar-repositorio" type="submit">Procurar</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="cad_footerLyt" id="rodape">
        <?php include_once("../include/footer.php"); ?>
    </div>
</body>
<script src="../js/cadastro.js"></script>

</html>