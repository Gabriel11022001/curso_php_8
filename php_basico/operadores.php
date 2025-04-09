<?php

$primeiroValor = 22;
$segundoValor = 11;

// soma
$soma = $primeiroValor + $segundoValor;

echo "Soma: " . $soma . "<br>";

// subtração
$subtracao = $primeiroValor - $segundoValor;

echo "Subtração: " . $subtracao . "<br>";

// multiplicação
$mult = $primeiroValor * $segundoValor;

echo "Multiplicação: " . $mult . "<br>";

// divisão
$div = $primeiroValor / $segundoValor;

echo "Divisão: " . $div . "<br>";

// resto da divisão
$resto = $primeiroValor % $segundoValor;

echo "Resto da divisão: " . $resto . "<br>";

// potência
$potencia = $primeiroValor ** 2;

echo "Potencia de " . $primeiroValor . " = " . $potencia . "<br>";

// incremento
$valor = 22;

echo "Valor antes do incremento: " . $valor . "<br>";

$valor++;

echo "Valor depois do incremento: " . $valor . "<br>";

// decremento
$valor--;

echo "Valor após ser decrementado: " . $valor . "<br>";

// atribuição
$valor = 100;

$valor += 100; // valor agora vale 200

echo "Valor: " . $valor . "<br>";

$valor -= 20; // valor agora vale 180

echo "Valor: " . $valor . "<br>";

// concatenar
$nome = "Gabriel";

$nome .= " Rodrigues dos Santos";

echo "Nome: " . $nome . "<br>";

$nome = null;

// se $nome for null, vai atribuir para a variavel a string "Valor não definido"
$valorTeste = $nome ?? "Valor não definido";

echo $valorTeste . "<br>";

// operadores de comparação
var_dump($primeiroValor == $segundoValor); // igual a
echo "<br>";

var_dump($primeiroValor != $segundoValor); // diferente de
echo "<br>";

var_dump($primeiroValor > $segundoValor); // maior que
echo "<br>";

var_dump($primeiroValor < $segundoValor); // menor que
echo "<br>";

var_dump($primeiroValor >= $segundoValor); // maior ou igual a 
echo "<br>";

var_dump($primeiroValor <= $segundoValor); // menor ou igual a
echo "<br>";

var_dump($primeiroValor === $segundoValor); // identico a(valida também o tipo da variavel e não somente o valor)
echo "<br>";

// operadores lógicos
$numero = 100;

if (!empty($numero) && $numero >= 100) { // and
    echo "passou!";
} else {
    echo "não passou";
}

echo "<br>";

$numero = 10;

if (!empty($numero) || $numero >= 100) { // or
    echo "passou no or!";
} else {
    echo "não passou no or!";
}

echo "<br>";

$possuiCnh = true;

if (!$possuiCnh) { // negação
    echo "O usuário não possui cnh!<br>";
} else {
    echo "O usuário possui cnh!<br>";
}
