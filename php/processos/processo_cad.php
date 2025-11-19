<?php
require_once "../conexao.php";
require_once "../classe/usuario_cl.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<div class='mensagem erro'>Acesso inválido — formulário não enviado.</div>";
    exit;
}

$nome        = $_POST['nome'] ?? '';
$email       = $_POST['email'] ?? '';
$senha       = $_POST['senha'] ?? '';
$rua         = $_POST['rua'] ?? '';
$numero_casa = $_POST['numero_casa'] ?? '';
$bairro      = $_POST['bairro'] ?? '';
$cidade      = $_POST['cidade'] ?? '';
$estado      = $_POST['estado'] ?? '';

$usuario = new usuario(); 


$idEndereco = $usuario->CadastrarEndereco($rua, $numero_casa, $bairro, $cidade, $estado);

if ($idEndereco === false || empty($idEndereco)) {
    echo "<div class='mensagem erro'>Erro ao cadastrar endereço. Cadastro cancelado.</div>";
    exit;
}

$resultado = $usuario->CadastrarUsuario($nome, $email, $senha, $idEndereco);

if ($resultado === true) {
    echo "<div class='mensagem sucesso'>Cadastro finalizado com sucesso!</div>";
} else {
    echo "<div class='mensagem erro'>Falha ao cadastrar o usuário.</div>";
}
