<?php 

//Incluir a conexão do banco de dados

include 'conexao.php';

//Guardar a instrução do mysql na varíavel

$insert = "INSERT INTO tb_produto VALUE (null, 'camera', '1000')";

//Função query irá executar a instrução SQL dentro do banco

$resultado = $conexao->query($insert);

if ($resultado == true) {
    echo "<script>alert('Produto cadastrado com sucesso')</script>";
}



?>