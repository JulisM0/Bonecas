<?php

include "../conexao.php";
require_once ("../classe/usuario_cl.php");

$usuario = new usuario();

$email = $_POST['email'];
$senha = $_POST['senha'];

$login = $usuario->Login($email, $senha);

if ($login) {
    header("");
} else {
    echo "Não foi possível realizar o login.";
    header("");
}

?>