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
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
</head>

<body class="fundo">
    <?php
    include_once("../include/navBar.php");

    $cod = $_GET['cod'];
    ?>

    <main class="fundo" id="fundo">
        <div class="cad_center">
            <div class="cad_formLyt">
                <div class="cad_bordaAmarela">
                    <center>
                        <h1 class="cad_titulo"> Dados de Aluno </h1>
                    </center>

                    <form class="row g-3 cad_form" method="POST" action="/TesteTCC2/control/inserirAluno.php">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Nome Completo</label>
                            <input style="text-transform: uppercase" type="text" class="form-control" name="cxNomeAluno" id="inputEmail4" placeholder="Insira seu nome completo" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Sexo</label>
                            <select id="cmb" name="cmb_Sexo" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="Masculino" style="color: #0A005b">Masculino</option>
                                <option value="Feminino" style="color: #0A005b">Feminino</option>
                                <option value="Binario" style="color: #0A005b">Não-Binario</option>
                                <option value="Informar" style="color: #0A005b">Não Informar</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" name="cx_DtNasc" id="inputAddress" data-mask="000.000.000-00" placeholder="Insira seu email" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">ETEC:</label>
                            <select id="cmb" name="cmb_Escola" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                <option value="" selected disabled>Selecione...</option>
                                <?php include_once('../include/listasEtecs.php') ?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Número de RM:</label>
                            <input type="number" class="form-control" name="cx_RM" placeholder="00000" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Curso:</label>
                            <select id="cmb" name="cmb_Curso" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="DS" style="color: #0A005b">Desenvolvimento de Sistemas</option>
                                <option value="ADM" style="color: #0A005b">Administração</option>
                                <option value="LOG" style="color: #0A005b">Logística</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Módulo:</label>
                            <select id="cmb" name="cmb_Modulo" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="1" style="color: #0A005b">1º Módulo</option>
                                <option value="2" style="color: #0A005b">2º Módulo</option>
                                <option value="3" style="color: #0A005b">3º Módulo</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck" style="color: #0A005b">
                                    * Eu declaro que li e concordo com os <a href="#"> Termos de Uso e Privacidade </a> do TCC Show e Centro Paula Souza
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <center> <button type="submit" class="btn cad_formBtn">Cadastrar</button> </center>
                        </div>

                        <input type="hidden" name="cod" value="<?php echo $cod; ?>">
                    </form>
                </div>
            </div>
        </div>
        <!-- Fim do bloco de cadastro -->
    </main>
    <div class="cad_footerLyt" id="rodape">
        <?php
        include_once("../include/footer.php");
        ?>
    </div>
</body>

<script src="../js/cadastro.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</html>