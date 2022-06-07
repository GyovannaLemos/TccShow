<?php
/*
function logar()
{
    $conn = new Conexao();
    $conectar = $conn->getConn();

    $login = $_POST['txt_NomeUser'];
    $senha = $_POST['txt_Senha'];
    $opcao = ['cos' => 8];
    $senha = password_hash($senha, PASSWORD_BCRYPT, $opcao);

    $query = 'CALL Sp_Selecionar_Usuario(:email, :senha)';
}

*/
    function logar()
    {
        $conn = new Conexao();
        $conectar = $conn->getConn();

      $login = $_POST["txt_Email"];
      $senha = $_POST["txt_Senha"];
      $opcao = ['cos' => 8];
      $senhaC = password_hash($senha, PASSWORD_BCRYPT, $opcao);

      $lista = $conectar -> query("select email_usuario as 'Email', usuario_senha as 'Senha' from tb_usuario");

      $loginCerto = false;
      $senhaCerta = false;

      $resultado = false;

      foreach($lista as $usuario)
      {
        if ($login == $usuario['Email'])
        {
          $loginCerto = true;
        }

        if (password_verify($senha, $senhaC))
        {
          $senhaCerta = true;
        }
      }
      
      if ($loginCerto == true && $senhaCerta == true)
      {
        $resultado = true;
      }

      return $resultado;
    }
?>