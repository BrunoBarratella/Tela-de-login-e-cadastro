<?php
require_once __DIR__ . "/conexao_class.php";

class CadastroUsuario
{

  public $nome_usuario;
  public $senha_usuario;
  public $email_usuario;
  public $data_nasc_usuario;
  public $idade;

  public function set()
  {
    $ponte = new Conexao();
    try {
      $query = "INSERT INTO cadastro_usuarios VALUES('id', '$this->nome_usuario', '$this->senha_usuario', '$this->email_usuario', 'data_nasc_usuario', " . $this->idade . ")";


    $qr = $ponte->conn->prepare($query);
    $qr->execute();
    } catch (PDOException $erro) {
      echo "Whoops, ocorreu um erro ao passar os dados <br>" . $erro;
    }
  }
}
