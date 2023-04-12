<?php
require_once __DIR__ . "/class/cadastroUsario_class.php";
$conectado = new CadastroUsuario();

$recebe = $conectado->get();

?>

<br><br>
<form action="" method="get">
  <label for="email">Digite aqui seu e-mail: </label><br>
  <input type="search" name="email"><br><br>
</form>

<?php
//Crio a condição onde se o $_GET['email'] estiver preenchido ele cumpre as condições abaixo
if ($_GET['email']) {
  //Crio um variavel onde atribuo a ela um array_search, que procura o conteudo do $_GET na minha variavel recebe com a chave com o valor de email_usuario
  $retorno = array_search($_GET['email'], array_column($recebe, 'email_usuario'));

  //se a variavel retornar vazio digo que não existe aquele email, e caso contrario se retornar alguma coisa executa tudo abaixo
  if ($retorno == '') {
    echo "Parece que este email não foi cadastrado em nenhuma conta";
  } else {
    echo "<form action='' method='post'>
<label for='novaSenha'>Digite sua nova senha: </label><br>
  <input type='password' name='novaSenha'><br><br>

  <label for='repeteSenha'>Digite novamente sua nova senha </label><br>
  <input type='password' name='repeteSenha'><br><br>

<button type='submit'>Pronto</button>
</form>";

    if ($_POST) {
      if ($_POST['novaSenha'] === $_POST['repeteSenha']) {
        $conectado->senha_usuario = $_POST['repeteSenha'];
        $conectado->email_usuario = $_GET['email'];

        $conectado->put();
      } else {
        echo "Ops, parece que as senhas não coincidem!";
      }
    }
  }
}

?>
