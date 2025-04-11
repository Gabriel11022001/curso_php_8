<?php

use Models\GeraFuncionarios;

require_once "autoloader.php";

// while
$pessoas = [
    "Gabriel",
    "Fernanda",
    "Pedro",
    "Maria",
    "Gustavo"
];

$contador = 0;

while ($contador < count($pessoas)) {
    echo "Nome: " . $pessoas[ $contador ] . "<br>";

    $contador++;
}

$funcionarios = GeraFuncionarios::gerar(10);

$i = 0;

while ($i < count($funcionarios)) {
    $funcionario = $funcionarios[ $i ];

    echo "id: " . $funcionario->getId() . "<br>";
    echo "nome completo: " . $funcionario->getNomeCompleto() . "<br>";
    echo "telefone: " . $funcionario->getTelefone() . "<br>";
    echo "email: " . $funcionario->getEmail() . "<br>";
    echo "salário: R$" . $funcionario->getSalario() . "<br>";

    $i++;
}

// do-while
$i = 0;

do {
    echo "contador: " . $i . "<br>";

    $i = $i + 1;
} while($i < 100);

// for
for ($contadorFuncionarios = 0; $contadorFuncionarios < count($funcionarios); $contadorFuncionarios++) {
    $funcionario = $funcionarios[ $contadorFuncionarios ];

    echo "Nome: " . $funcionario->getNomeCompleto() . "<br>";
    echo "E-mail: " . $funcionario->getEmail() . "<br>";
    echo "Telefone: " . $funcionario->getTelefone() . "<br>";
    echo "Salário: R$" . $funcionario->getSalario() . "<br>";

    for ($contadorSubordinados = 0; $contadorSubordinados < count($funcionario->getSubordinados()); $contadorSubordinados++) {
        $subordinado = $funcionario->getSubordinados()[ $contadorSubordinados ];

        echo "subordinado do funcionário " . $funcionario->getNomeCompleto() . ": " . $subordinado->getNomeCompleto() . "<br>";
    }

}

// foreach
foreach ($funcionarios as $funcionario) {
    echo $funcionario->getNomeCompleto() . "<br>";
}

foreach ($funcionarios as $key => $funcionario) {
    echo "Nome do funcionário: " . $funcionario->getNomeCompleto() . "<br>";
    echo "indice do funcionário: " . $funcionario->getId() . "<br>";
}