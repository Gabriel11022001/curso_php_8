<?php

namespace Teste2;

class Pessoa {

    private $id;
    private $telefone;
    private $email;
    private $razaoSocial;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {

        return $this->id;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {

        return $this->telefone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {

        return $this->email;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function getRazaoSocial() {

        return $this->razaoSocial;
    }

    public function apresentarDadosPessoa() {
        echo "Apresentar dados da classe Pessoa 2:<br>";
        echo "Razao social: " . $this->getRazaoSocial() . "<br>";
        echo "telefone: " . $this->getTelefone() . "<br>";
        echo "email: " . $this->getEmail() . "<br>";
        echo "id: " . $this->getId() . "<br>";
    }

}