<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta Tags Obrigatórias -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> TCC Show </title>
        
        <!-- Icone na head-->
        <link rel="shortcut icon" href="../view/images/headIcone.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="./bootstrap-5.0.1-dist/css/bootstrap.min.css"/>
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.js"> </script>
        <script src="./bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"> </script>

        <!-- Arquivo CSS Style -->
        
        <link rel="stylesheet" href="../css/navBar.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/repositorio.css">

        <link rel="stylesheet" href="../css/enviarProjeto.css">
        
        <script src="../js/enviarProjeto.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>

    </head> 
    
    <body>
        <?php include_once("../include/navBar.php"); ?>
        <main class="fundo" id="fundo">
            <div class="cad_center">
                <div class="cad_formLyt">
                    <div class="cad_bordaAmarela">
                        <center><h1 class="cad_titulo"> Envio de Projeto </h1></center>
                        <form class="row g-3 cad_form" method="POST" action="../model/modelEnviarProjeto.php" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Nome do projeto</label>
                                    <input type="text" class="form-control" name="txt_NomePro" id="inputEmail4" placeholder="Insira o nome do projeto" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputEmail4" class="form-label">Integrantes</label>
                                    <textarea name="text" class="form-control" style="resize: none;" rows="1" placeholder="Insira o nome dos integrantes" required spellcheck="false" name="intergra" id="#" ></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Módulo</label>
                                    <select id="cmb_TipoUser" name="cmb_Modulo" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                    <option value="" selected disabled>Selecione...</option>
                                    <option value="comum" style="color: #0A005b">1º Módulo</option>
                                    <option value="aluno" style="color: #0A005b">2º Módulo</option>
                                    <option value="prof" style="color: #0A005b">3° Módulo</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Curso</label>
                                    <select id="cmb_TipoUser" name="cmb_Modulo" class="form-select cad_cmbCorCinza" onchange="validarCmb(this)" required>
                                    <option value="" selected disabled>Selecione...</option>
                                    <option value="comum" style="color: #0A005b">Administração</option>
                                    <option value="aluno" style="color: #0A005b">Desenvolvimento de sistema</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Logo do projeto</label>
                                    <input type="file" name="imagem" id="imagem" onchange="previewImagem()" class="form-control" required><br />
                                    <center> <img id="img-logo" class="envio"/> </center>
                                </div>
                                
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Envio de arquivo</label>
                                    <input type="file" name="arquivo" class="form-control" id="inputAddress2" required  >
                                </div>
                                
                                <div class="col-12">
                                <center><button type="submit" class="btn cad_formBtn" name="btn_enviar">Enviar</button> </center>
                                </div>
                            </form>
                        
                    </div>
                </div>
            </div>
            <!-- Fim do bloco de cadastro -->
        </main>
        <div class="cad_footerLyt" id="rodape">
            <?php include_once("../include/footer.php"); ?>
        </div>
    </body>

    <script src="js/cadastro.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html>