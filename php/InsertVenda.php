<?php 

//Incluir a conexão do banco de dados

include 'conexao.php';

//Guardar a instrução do mysql na varíavel

$insert = "INSERT INTO tb_venda VALUE (null, '2026-05-11', '10', '10000', '1', '1', '1')";

//Função query irá executar a instrução SQL dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Venda cadastrada com sucesso')</script>";
}



?>