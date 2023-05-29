<?php
// Dados do formulário
$cidade = $_POST['cidade'];
$temp_corte = $_POST['temp_corte'];
$conhece_nb = $_POST['conhece_nb'];

// Nome do arquivo CSV
$arquivo = getcwd() . '/dados.csv';
// Verifica se o arquivo já existe
if (!file_exists($arquivo)) {
    // Se o arquivo não existir, cria o cabeçalho
    $cabecalho = "Você é da cidade de SANTA LUZA?;Você conta o cabelo de quanto em quanto tempo?;Você conhece o clube da NB?\n";
    file_put_contents($arquivo, $cabecalho);
}

// Conteúdo a ser gravado no arquivo
$conteudo = "$cidade;$temp_corte;$conhece_nb\n";

// Grava os dados no arquivo
file_put_contents($arquivo, $conteudo, FILE_APPEND);

echo "Dados gravados com sucesso no arquivo CSV!";
