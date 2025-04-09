<?php

$nomeCompleto = "Gabriel Rodrigues dos Santos";

// quebrar a string em um array pelo separador passado no primeiro argumento
$palavrasNome = explode(" ", $nomeCompleto);

print_r($palavrasNome);

// obter o nome todo maiusculo
$nomeTodoMaiusculo = strtoupper($nomeCompleto);

echo "<br>";

var_dump($nomeTodoMaiusculo);

// obter nome todo minusculo
$nomeTodoMinusculo = strtolower($nomeCompleto);

echo "<br>";

var_dump($nomeTodoMinusculo);

echo "<br>";

$quantidadeCaracteres = strlen($nomeCompleto);

echo "A string " . $nomeCompleto . " possui um total de " . $quantidadeCaracteres . " caracteres!<br>";

$primeiroNome = str_replace("Rodrigues dos Santos", "", $nomeCompleto);

echo "primeiro nome: " . $primeiroNome . "<br>";

$textoTeste = " teste 13234  ";
var_dump($textoTeste);
echo "<br>";

// remover caracteres em branco do inicio e fim da string
$textoTeste = trim($textoTeste);

var_dump($textoTeste);

echo "<br>";

$hash = md5("teste@teste123"); // gerar um hash md5

var_dump($hash);