<?php 
//Informações necessárias para conexão com o banco

$servidor = 'localhost';
$usuariobanco = 'root';
$senhabanco = 'root';
$nmbanco = 'bd_vendas';

//Função MySQL para conexão com banco de dados

$conexao = new mysqli($servidor, $usuariobanco, $senhabanco, $nmbanco);

if($conexao->connect_error){
    echo "Erro na Conexão";
}



?>