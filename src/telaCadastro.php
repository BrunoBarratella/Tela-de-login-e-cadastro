<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuario</title>
  <link rel="shortcut icon" href="../img/favicon.png">
  <link rel="stylesheet" href="../style/cadastro.css">
</head>

<body>
  <div class="cadastroContainer">
    <div class="cadastroContent">
      <div class="campos">
        <h1 class="cadastroTitle">Cadastro de Usuario</h1>
        <form action="" method="post" class="cadastroForm">
          <label for="nome_usuario">Usuario:</label><br>
          <input type="text" name="nome_usuario" class="cadastroInput" required><br><br>

          <label for="senha_usuario">Senha:</label><br>
          <input type="password" name="senha_usuario" class="cadastroInput" required><br><br>

          <label for="email_usuario">E-mail:</label><br>
          <input type="email" name="email_usuario" class="cadastroInput" required><br><br>

          <label for="idade">Idade:</label><br>
          <input type="number" name="idade" class="cadastroInput"><br><br>

          <button type="submit" class="cadastra">Cadastrar</button>
        </form>
      </div>
      <div class="boasVindas">
        <button class="voltar"><a href="../index.php" class="voltarLink">Voltar</a></button>
        <h2>
          É um prazer ter você
          aqui com a gente!
        </h2>
      </div>
    </div>
  </div>
</body>

</html>
<?php
require_once "../class/cadastroUsuario_class.php";
if ($_POST) {
  $pessoa = new CadastroUsuario();

  $pessoa->nome_usuario = $_POST['nome_usuario'];
  $pessoa->senha_usuario = $_POST['senha_usuario'];
  $pessoa->email_usuario = $_POST['email_usuario'];
  $pessoa->data_nasc_usuario = $_POST['data_nasc_usuario'];
  $pessoa->idade = $_POST['idade'];

  $pessoa->set();
}
?>