<?php

/**
 * o php é um alinguagem de tipagem dinâmica, ou seja, não necessita
 * que você informe o tipo da variável na declaração dela, o tipo da variável vai ser
 * o tipo do dado atribuido a ela
 */

// bool
$possuiCnh = true;

var_dump($possuiCnh);

if ($possuiCnh) {
    echo "O usuário possui cnh, logo, pode dirigir!<br>";
} else {
    echo "O usuário não possui cnh, logo, ele não pode dirigir<br>";
}

// em php, o número 0, string vazia, arrays vazio e null, podem ser considerados como false
$testeBoll = "";

if ($testeBoll) {
    echo "foi considerado como true na linha 22!<br>";
} else {
    echo "foi considerado como false na linha 24!<br>";
}

$testeBoll = [];

if ($testeBoll) {
    echo "foi considerado como true na linha 30!<br>";
} else {
    echo "foi considerado como false na linha 32!<br>";
}

$testeBoll = null;

if ($testeBoll) {
    echo "foi considerado como true na linha 38!<br>";
} else {
    echo "foi considerado como false na linha 40!<br>";
}

$testeBoll = 0;

if ($testeBoll) {
    echo "foi considerado como true na linha 46!<br>";
} else {
    echo "foi considerado como false na linha 48!<br>";
}

// int -> representa os números inteiros
$primeiroValor = 22;
$segundoValor = 434;

$soma = $primeiroValor + $segundoValor;

echo "A soma entre " . $primeiroValor . " e " . $segundoValor . " é igual a " . $soma . "<br>";

var_dump($soma);

var_dump($primeiroValor + $segundoValor); // soma
var_dump($primeiroValor - $segundoValor); // subtração
var_dump($primeiroValor / $segundoValor); // divisão
var_dump($primeiroValor * $segundoValor); // multiplicação
var_dump($primeiroValor % $segundoValor); // resto da divisão

// floats
$altura = 1.83;

var_dump($altura);

// eu consigo realizar operações entre números de ponto flutuante e inteiros, exemplo:
$num1 = 22;
$num2 = 33;

var_dump($num1 + $num2);
var_dump($num1 - $num2);
var_dump($num1 / $num2);

// strings
$nomeCompleto = "Gabriel Rodrigues dos Santos"; // com aspas duplas
$telefone = '(14) 998770-5433'; // com aspas simples

echo "<br>";
echo "Nome completo: " . $nomeCompleto . "<br>";
echo "Telefone: " . $telefone . "<br>";

// imprimir variaveis

echo "Nome completo: $nomeCompleto<br>";

$dataNascimento = "11/02/2001";

echo "Data de nascimento: $dataNascimento<br>";

// strings numéricas
var_dump("11" == 11); // true
echo "<br>";
var_dump("11" === 11); // false por conta do operador === que compara também o tipo

// arrays
$nomes = ["Gabriel", "Maria", "Pedro", "José", "Maria Eduarda", "Pedro", "Gabriel", "Fernanda"];

var_dump($nomes);

// posos ter um array armazenando diferentes tipos de dados
$arraysComTiposDiferentes = [1, 2, true, false, "Gabriel", false, 22.99];

echo "<br>";

var_dump($arraysComTiposDiferentes);

// acessar elemento em indice expecifico
echo "<br>";
var_dump($nomes[ 0 ]);
echo "<br>";
var_dump($nomes[ 1 ]);
echo "<br>";
var_dump($nomes[ 4 ]);

// array chave => valor
// a chave pode ser um int ou uma string, o valor pode ser qualquer coisa
$pessoas = [
    "gabriel" => [
        "telefone" => "(14) 99877-7654",
        "email" => "gabriel@teste.com"
    ],
    "pedro" => [
        "telefone" => "(14) 99877-9876",
        "email" => "pedro@teste.com"
    ],
    "jose" => [
        "telefone" => "(14) 99876-5432",
        "email" => "jose_teste@teste.com"
    ]
];

echo "<br>";
var_dump($pessoas[ "gabriel" ]);

echo "<br>";

echo $pessoas[ "gabriel" ][ "email" ] . "<br>";
echo $pessoas[ "gabriel" ][ "telefone" ] . "<br>";

echo $pessoas[ "pedro" ][ "email" ] . "<br>";
echo $pessoas[ "pedro" ][ "telefone" ] . "<br>";

$clientes = [
    [
        "nome" => "Gabriel",
        "email" => "gabriel@teste.com",
        "status" => true
    ],
    [
        "nome" => "Maria",
        "email" => "maria@teste.com",
        "status" => false
    ],
    [
        "nome" => "Eduarda",
        "email" => "eduarda@teste.com",
        "status" => true
    ]
];

$clientesAtivos = [];
$clientesInativos = [];

// percorrer um array
for ($contador = 0; $contador < count($clientes); $contador++) {

    if ($clientes[ $contador ][ "status" ]) {
        $clientesAtivos[] = $clientes[ $contador ]; // adicionar elemento no array
    } else {
        $clientesInativos[] = $clientes[ $contador ]; // adicionar elemento no array
    }

}

echo "<br>";

var_dump($clientesAtivos);

echo "<br>";

var_dump($clientesInativos);

// remover elementos de um array
$emails = ["gabriel@teste.com", "fernanda@teste.com", "pedro@teste.com", "luiza@teste.com"];

echo "<br>";

var_dump($emails);

unset($emails[ 0 ]); // remover o elemento do indice 0

echo "<br>";

var_dump($emails);

// apagar todo o array
unset($emails);

echo "<br>";

// var_dump($emails);

/**
 * no exemplo acima, apaga o array da memória, pra apagar
 * os elementos mas manter o array na memória, é só fazer o seguinte
 */

$telefones = ["(14) 99877-6543", "(14) 99876-7890", "(14) 99845-9876"];

for ($i = 0; $i < count($telefones); $i++) {
    unset($telefones[ $i ]);
}

var_dump($telefones);