<?php
require_once __DIR__ . "/class/cadastroUsario_class.php";
$conectado = new CadastroUsuario();

if ($_POST) {
  $conectado->nome_usuario = $_POST['usuario'];
  $conectado->senha_usuario = $_POST['senha'];

  $conta = count($conectado->get());

  if($conta<1){
    header("Location: index.php");
  }else{
    echo "Logado Com Sucesso!! Seja bem vindo(a) " . $conectado->nome_usuario . "!!";
    if($conectado->nome_usuario === "admin"){
      echo "<br>Bem Vindo Admin";
    }
  }
}
