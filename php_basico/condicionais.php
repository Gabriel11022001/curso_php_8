<?php

$mes = 1;

// if
if ($mes === 1) {
    echo "Janeiro";
}

if ($mes === 2) {
    echo "Fevereiro";
}

if ($mes === 3) {
    echo "Março";
}

if ($mes == 4) {
    echo "Abril";
}

if ($mes == 5) {
    echo "Maio";
}

if ($mes == 6) {
    echo "Junho";
}

if ($mes == 7) {
    echo "Julho";
}

if ($mes == 8) {
    echo "Agosto";
}

if ($mes == 9) {
    echo "Setembro";
}

if ($mes == 10) {
    echo "Outubro";
}

if ($mes == 11) {
    echo "Novembro";
}

if ($mes == 12) {
    echo "Dezembro";
}

echo "<br>";

$nomeCompleto = "Gabriel Rodrigues dos Santos";

if (str_contains($nomeCompleto, "Gabriel"))
    echo "Olá Gabriel<br>";

echo "<br>";

// else
if ($nomeCompleto == "Gabriel") {
    echo "Gabriel teste";
} else {
    echo "Não é o Gabriel";
}

echo "<br>";

if ($nomeCompleto == "Gabriel")
    echo "é o Gabriel";
else    
    echo "não é o Gabriel";

echo "<br>";

// else-if
$primeiroValor = 22;

if ($primeiroValor > 0) {   
    echo "positivo<br>";
} elseif ($primeiroValor == 0) {
    echo "zero<br>";
} else {
    echo "negativo<br>";
}