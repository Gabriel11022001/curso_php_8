<?php

// printar algo
echo "Gabriel Rodrigues dos Santos</br>";

// definir variaveis
$nomeCompleto = "Gabriel Rodrigues dos Santos";

echo $nomeCompleto . "</br>";

$nome = "Gabriel"; // válido
$_nome = "Fabio"; // válido
// $4nome = "Julia"; -> invalido

$telefone = "";

// validar se uma variável foi inicializada
if (isset($telefone)) {
    echo "Informou o telefone!<br>";
} else {
    echo "Não informou o telefone!<br>";
}

$email = "";

/**
 * empty -> valida se uma variavel é null, false, 0, array vazio ou uma string vazia
 */
if (empty($email)) {
    echo "Não informou o e-mail!<br>";
} else {
    echo "Informou o e-mail: " . $email . "<br>";
}

$email = "teste@teste.com"; // reatribuindo uma variavel

echo $email . "<br>";