<?php
// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

// Nome do arquivo CSV
$arquivo = './dados.csv';

// Verifica se o arquivo já existe
if (!file_exists($arquivo)) {
    // Se o arquivo não existir, cria o cabeçalho
    $cabecalho = "Você é da cidade de SANTA LUZA?;Você conta o cabelo de quanto em quanto tempo?;Você conhece o clube da NB?\n";
    file_put_contents($arquivo, $cabecalho);
}

// Conteúdo a ser gravado no arquivo
$conteudo = "$nome;$email;$idade\n";

// Grava os dados no arquivo
file_put_contents($arquivo, $conteudo, FILE_APPEND);

echo "Dados gravados com sucesso no arquivo CSV!";
