<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Login</title>
  <link rel="stylesheet" href="./style/style.css">
  <link rel="shortcut icon" href="./img/favicon.png">
</head>

<body>
  <div class="telaDeLogin">
    <div class="loginContent">
      <h1 class="loginText">Login</h1>
      <div class="login">
        <form action="./src/telaLogada.php" method="post">
          <label for="usuario">Usuario: </label><br>
          <input type="text" class="loginInput" required><br><br>

          <label for="senha">Senha:</label><br>
          <input type="password" class="loginInput" required><br><br>
          <button type="submit" class="entrar">Entrar</button>
        </form>
      </div>
      
      <h2 class="cadastra">Não tem uma conta? Então <a href="./src/telaCadastro.php" class="linkCadastra">Crie Uma!</a></h2>
    </div>
  </div>
</body>

</html>