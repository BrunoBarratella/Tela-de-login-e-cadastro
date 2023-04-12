<?php
require_once __DIR__ . "/class/cadastroUsario_class.php";
$usuario = new CadastroUsuario();

if ($_POST) {
  $usuario->nome_usuario = $_POST['nome_usuario'];
  $usuario->senha_usuario = $_POST['senha_usuario'];
  $usuario->email_usuario = $_POST['email_usuario'];
  $usuario->idade = $_POST['idade'];

  $usuario->set();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./style/style.css">
  <title>Login</title>
</head>

<body>
  <div class="logoDiv">
    <img src="./img/logo.png" alt="Logo Ares" class="logo">
  </div>
  <div class="telaDeLogin">
    <div class="login">
      <div class="formLogin">
        <h1 class="loginTitulo">Faça seu login! </h1>
        <form action="telaLogin.php" method="post">
          <label for="usuario">Usuario: </label><br>
          <input type="text" name="usuario" class="inputLogin"><br><br>

          <label for="senha">Senha: </label><br>
          <input type="password" name="senha" class="inputLogin"><br><br>

          <div class="areaBtn">
            <button type="submit" class="entrar">Login</button>
          </div>
        </form>
        <h3 class="cadastro">Não tem uma conta? <a href="cadastroUsuario.php" class="linkCriaConta"><b>Crie uma aqui!</b></a></h3>
        <h4 class="esqueceuSenha"><a href="recuperaSenha.php?recuperaSenha" class="linkEsqueceuSenha">Esqueci minha senha</a></h4>
      </div>
    </div>
  </div>

</body>

</html>