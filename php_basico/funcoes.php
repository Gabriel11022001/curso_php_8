<?php

use Models\Funcionario;

require_once "autoloader.php";

function somar(int $primeiroValor, int $segundoValor): int
{

    return $primeiroValor + $segundoValor;
}

echo somar(1, 2) . "<br>";

function dividir($primeiroValor, $segundoValor)
{

    if ($primeiroValor == 0 || $segundoValor == 0) {

        throw new InvalidArgumentException("Parâmetros incorretos!");
    }

    return $primeiroValor / $segundoValor;
}

echo dividir(11, 9) . "<br>";

$multiplicar = function ($primeiroValor, $segundoValor) {

    return $primeiroValor * $segundoValor;
};

echo $multiplicar(11, 2) . "<br>";

function apresentarDadosFuncionario(Funcionario $funcionario): void
{   
    echo "Nome: " . $funcionario->getNomeCompleto() . "<br>";
    echo "Telefone: " . $funcionario->getTelefone() . "<br>";
    echo "E-mail: " . $funcionario->getEmail() . "<br>";
    echo "Salário: " . $funcionario->getSalario() . "<br>";
}

$funcionario = new Funcionario();
$funcionario->setId(1);
$funcionario->setNomeCompleto("Gabriel Rodrigues dos Santos");
$funcionario->setEmail("teste@teste.com");
$funcionario->setTelefone("(14) 99877-8765");
$funcionario->setSalario(20999);

apresentarDadosFuncionario($funcionario);

// passagem por referência
function alterarNome(&$nome, $novoNome) {
    $nome = $novoNome;
}

$nome = "Gabriel Rodrigues dos Santos";

alterarNome($nome, "Eduardo Pereira da Silva");

echo $nome . "<br>";

// posso passar parâmetros padrao
// os parâmetros com valores padrão devem sempre ser os ultimos
function apresentarDadosPessoa($nome, $telefone, $email, $tipoPessoa = "pf") {

    if ($tipoPessoa == "pf") {
        echo "Apresentando dados da pessoa fisica:<br>";
    } else {
        echo "Apresentando dados da pessoa juridica:<br>";
    }

    echo "Nome: " . $nome . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "E-mail: " . $email . "<br>";
}

apresentarDadosPessoa("Gabriel Rodrigues dos Santos", "(14) 99877-9876", "teste@teste.com");
apresentarDadosPessoa("Confeitaria da Josefa", "(14) 99877-0987", "teste2@gmail.com", "pj");

// funções podem retornar dados
function calcularIdade($anoAtual, $anoNascimento) {

    return $anoAtual - $anoNascimento;
}

var_dump(calcularIdade(2025, 2001));

echo "<br>";

$idade = calcularIdade(2025, 1999);

echo $idade . "<br>";

function gerarFuncionarios() {
    $funcionarios = [];

    for ($i = 0; $i < 100; $i++) {
        $funcionario = new Funcionario();

        $funcionario->setId($i + 1);
        $funcionario->setNomeCompleto("funcionário " . ($i + 1));
        $funcionario->setTelefone("(14) 99888-9876");
        $funcionario->setEmail("teste" . ($i + 1) . "@teste.com");
        $funcionario->setSalario(2000 + $i);

        array_push($funcionarios, $funcionario);
    }

    return $funcionarios;
}

// print_r(gerarFuncionarios());

foreach (gerarFuncionarios() as $funcionario) {
    echo "====================================================================<br>";
    echo "Nome completo: " . $funcionario->getNomeCompleto() . "<br>";
    echo "E-mail: " . $funcionario->getEmail() . "<br>";
    echo "Telefone: " . $funcionario->getTelefone() . "<br>";
    echo "Salário: R$" . $funcionario->getSalario() . "<br>";
}

// funções anônimas
$apresentarMensagem = function ($msg) {
    echo $msg . "<br>";
};

$apresentarMensagem("Olá Mundo!");

$primeiroValor = 22;
$segundoValor = 11;

// utilizar variaveis fora do escopo da função
$somar = function () use ($primeiroValor, $segundoValor) {

    return $primeiroValor + $segundoValor;
};

echo $somar();

echo "<br>";

$valorAlterar = 22;

$alterarValor = function () use (&$valorAlterar) {
    $valorAlterar = 11;
};

$alterarValor();

echo $valorAlterar . "<br>";

$nomeMetodoQueroInvocar = "apresentarFuncionario";

// posso invocar um método dessa forma também
$funcionario->$nomeMetodoQueroInvocar();