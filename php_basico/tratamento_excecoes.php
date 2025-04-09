<?php

use Excecoes\UsuarioInvalidoException;
use Models\Usuario;

require_once "autoloader.php";

try {
    // código que pode gerar exceção
    $usuario = new Usuario();

    // $usuario->realizarLogin("teste@teste.com", "123456");
    $usuario->realizarLogin("teste@teste.com", "teste123");
} catch (UsuarioInvalidoException $e) {
    // bloco onde vamos tratar a exceção
    echo $e->getMessage() . "<br>";
} catch (Exception $e) {
    // bloco onde vamos tratar a exceção
    echo $e->getMessage();
} finally {
    echo "O código aqui vai ser executado independente de ter sido lançada uma exceção ou não!<br>";
}

try {
    $usuario = new Usuario();

    $usuario->realizarLogin("teste@teste.com", "123455");
} catch (UsuarioInvalidoException|Exception $e) {
    // aplicar o mesmo tratamento para diferentes exceptions
    echo $e->getMessage() . "<br>";
}