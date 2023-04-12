<?php
require_once __DIR__."/conexao_class.php";

class CadastroUsuario{
 public $nome_usuario;
 public $senha_usuario;
 public $email_usuario;
 public $idade;

  public function set()
  {
    $conecta = new Conexao();

    try{
    $sql = "INSERT INTO cadastro_usuarios SET nome_usuario='" . $this->nome_usuario ."', senha_usuario='" . $this->senha_usuario . "', 
    email_usuario='" . $this->email_usuario . "', idade='" . $this->idade . "'";

    $qr = $conecta->conn->prepare($sql);
    $qr->execute();
    }catch(PDOException $erro){
      echo "Whoops, ocorreu um erro ao inserir dados" . $erro;
    }
  }

  public function get(){
    $conecta = new Conexao();

    try{

      if($_GET){
       $sql = "SELECT email_usuario FROM cadastro_usuarios";
      }else{
      $sql = "SELECT * FROM cadastro_usuarios WHERE nome_usuario='" . $this->nome_usuario . "' 
      AND senha_usuario='" . $this->senha_usuario . "' ";
      }

      $qr = $conecta->conn->prepare($sql);
      $qr->execute();
      return $qr->fetchAll();
    }catch(PDOException $erro){
      echo "whoops ocorreu um erro ao trazer dados da tabela" . $erro;
    }
  }

  public function put(){
    $conecta = new Conexao();

    try{
        $sql = "UPDATE cadastro_usuarios SET senha_usuario='" . $this->senha_usuario . "' WHERE email_usuario='" . $this->email_usuario . "'";

        $qr = $conecta->conn->prepare($sql);
        $qr->execute();
    }catch(PDOException $erro){
      echo "Whoops, ocorreu um erro ao atualizar o dados" . $erro;
    }
  }
}