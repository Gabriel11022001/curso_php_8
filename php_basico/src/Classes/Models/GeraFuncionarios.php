<?php

namespace Models;

class GeraFuncionarios {

    // gerar um array contendo N objetos do tipo Funcionario
    public static function gerar(int $quantidade): array
    {
        $funcionarios = [];

        for ($i = 0; $i < $quantidade; $i++) {
            $funcionario = new Funcionario();

            $funcionario->setId($i + 1);
            $funcionario->setNomeCompleto("Funcionário " . ($i + 1));
            $funcionario->setTelefone("(14) 99877-9876");
            $funcionario->setEmail("funcionario" . $i . "@teste.com");
            $funcionario->setSalario($i + 2000);

            $subordinado1 = new Funcionario();
            $subordinado2 = new Funcionario();

            $subordinado1->setId(1);
            $subordinado1->setNomeCompleto("Subordinado 1");
            $subordinado1->setTelefone("(14) 99877-7654");
            $subordinado1->setEmail("subordinado1@teste.com");

            $subordinado2->setId(2);
            $subordinado2->setNomeCompleto("Subordinado 2");
            $subordinado2->setEmail("subordinado2@teste.com");
            $subordinado2->setTelefone("(14) 99877-9876");

            $funcionario->setSubordinados([
                $subordinado1,
                $subordinado2
            ]);

            $funcionarios[] = $funcionario;
        }   

        return $funcionarios;
    }

}