<?php

include "../conexao.php";
require_once ("../classe/usuario_cl.php");

$usuario = new usuario();

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $conexao->prepare("SELECT * FROM cliente WHERE email = :email");

?>