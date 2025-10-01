<div class="titulo">Criar banco</div>

<?php

require_once "conexao.php";

$conexao = novaConexao(null); // conexão sem banco específico
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php_7';

$resultado = $conexao->query($sql);

if ($conexao->query($sql)) {
    echo 'Banco de dados criado com sucesso!';
} else {
    echo 'Erro ao criar banco de dados.' . $conexao->error;
}
$conexao->close();

echo 'Fim';
