<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro De Usuario</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="stylesheet" href="./style/cadastroUsuario.css">
</head>

<body>
  <div class="telaCadastro">
    <div class="quadroDeCadastro">
      <div class="formCadastro">
        <h1 class="cadastroTitulo">Cadastro de Usuario</h1>
        <hr>
        <form action="index.php" method="post">
          <label for="nome_usuario">Usuario: </label>
          <input type="text" name="nome_usuario"><br><br>

          <label for="senha_usuario">Senha: </label>
          <input type="password" name="senha_usuario"><br><br>

          <label for="email_usuario">E-mail: </label>
          <input type="email" name="email_usuario"><br><br>

          <label for="idade">Idade: </label>
          <input type="text"><br><br>

          <button type="submit" class="cadastrar">Cadastrar</button>
        </form>
        
      </div>
      <div class="logoDiv">
          <img src="./img/dark-logo.png" alt="Logo Ares" class="logo">
        </div>
    </div>
  </div>
</body>

</html>