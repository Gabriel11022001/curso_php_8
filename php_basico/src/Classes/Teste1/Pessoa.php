<?php

namespace Teste1;

class Pessoa {

    private $id;
    private $nomeCompleto;
    private $telefone;
    private $email;
    private $endereco;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {

        return $this->id;
    }

    public function setNomeCompleto($nomeCompleto) {
        $this->nomeCompleto = $nomeCompleto;
    }

    public function getNomeCompleto() {

        return $this->nomeCompleto;
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

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {

        return $this->endereco;
    }

    public function apresentarDadosPessoa() {
        echo "Apresentar dados da classe Pessoa 1:<br>";
        echo "id: " . $this->id . "<br>";
        echo "nome completo: " . $this->nomeCompleto . "<br>";
        echo "telefone: " . $this->telefone . "<br>";
        echo "e-mail: " . $this->email . "<br>";
        echo "cep: " . $this->getEndereco()->cep . "<br>";
        echo "complemento: " . $this->getEndereco()->complemento . "<br>";
        echo "logradouro: " . $this->getEndereco()->logradouro . "<br>";
        echo "cidade: " . $this->getEndereco()->cidade . "<br>";
        echo "bairro: " . $this->getEndereco()->bairro . "<br>";
    }

}