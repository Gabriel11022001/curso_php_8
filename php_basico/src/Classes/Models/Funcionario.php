<?php

namespace Models;

class Funcionario {

    private int $id;
    private string $nomeCompleto;
    private string $telefone;
    private string $email;
    private float $salario;
    private array $subordinados;

    public function __construct()
    {
        $this->id = 0;
        $this->nomeCompleto = "";
        $this->telefone = "";
        $this->email = "";
        $this->salario = 0;
        $this->subordinados = [];
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {

        return $this->id;
    }

    public function setNomeCompleto(string $nomeCompleto): void 
    {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function getNomeCompleto(): string
    {

        return $this->nomeCompleto;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getTelefone(): string
    {

        return $this->telefone;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {

        return $this->email;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function getSalario(): float
    {

        return $this->salario;
    }

    public function setSubordinados(array $subordinados): void
    {
        $this->subordinados = $subordinados;
    }

    public function getSubordinados(): array
    {

        return $this->subordinados;
    }

    public function apresentarFuncionario() {
        var_dump($this);

        echo "<br>";
    }

}