<?php

class Contato
{
    private $nome;
    private $telefone;

    public function __construct($nome, $telefone)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
}
