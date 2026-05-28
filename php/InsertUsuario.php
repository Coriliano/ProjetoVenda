<?php 

//Incluir a conexão do banco de dados

include 'conexao.php';

//Receber os dados do formulário

$nome = $_POST['NomeCompleto'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarsenha = $_POST['confirmarSenha'];


//Guardar a instrução do mysql na varíavel

$insert = "INSERT INTO tb_usuario VALUE (null, '$nome', '$email', '$senha')";

//Função query irá executar a instrução SQL dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Usuario cadastrado com sucesso')</script>";
}



?>