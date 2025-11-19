<?php   
require_once("../conexao.php");

class usuario{
   private $conexao;


   public function __construct(){
       $banco = new Banco();
       $this->conexao = $banco->conn();
   }

  private function ValidarSenha($senha){
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $senha);
}


   public function CadastrarEndereco($rua, $numero, $bairro, $cidade, $estado){
       try{
            $sql = "INSERT INTO endereco (rua, numero, bairro, cidade, estado) VALUES ('$rua', '$numero', '$bairro', '$cidade', '$estado')";
            $stmt = $this->conexao->prepare($sql);
            $stmt -> execute();

             return $this->conexao->lastInsertId();
       } catch (PDOException $erro){
            echo "Erro ao cadastrar endereço: " . $erro->getMessage(). "</div>";
       }
   }

   public function CadastrarUsuario($nome, $email, $senha, $idEndereco){
       if(!$this->ValidarSenha($senha)){
           echo "
            <div class='mensagem alerta'>
                Ela deve ter no mínimo <b>8 caracteres</b>, contendo:
                <ul>
                    <li>Uma letra <b>maiúscula</b></li>
                    <li>Uma letra <b>minúscula</b></li>
                    <li>Um <b>número</b></li>
                    <li>Um <b>caractere especial</b> (ex: !, @, #, $...)</li>
                </ul>
                Tente novamente!
            </div>";
            return;
       }

       $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

       try{

           $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha, endereco_idendereco) VALUES ('$nome', '$email', '$hashSenha', $idEndereco)";
           $stmt = $this->conexao->prepare($sql);
           $stmt -> execute();

           echo"
            <div class='mensagem sucesso'>
                Usuário cadastrado com sucesso!
            </div>";

       } catch (PDOException $erro){
            echo "Erro ao cadastrar usuário: " . $erro->getMessage(). "</div>";
       }   

   } 



}

?>
