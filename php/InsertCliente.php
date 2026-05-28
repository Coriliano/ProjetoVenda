<?php 

//Incluir a conexão do banco de dados

include 'conexao.php';

//Guardar a instrução do mysql na varíavel

$insert = "INSERT INTO tb_cliente VALUE (null, 'pixelmemories', '11958545875', 'Lucas')";

//Função query irá executar a instrução SQL dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Cliente cadastrado com sucesso')</script>";
}



?>