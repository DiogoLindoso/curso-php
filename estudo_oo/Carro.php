<?php

class Carro
{
    private $modelo;
    private $cor;
    private $marca;
    private $ano;

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function obtemDados()
    {
        echo 'Modelo : ' . $this->modelo . '<br>';
        echo 'Cor : ' . $this->cor . '<br>';
        echo 'Marca : ' . $this->marca . '<br>';
        echo 'Ano : ' . $this->ano . '<br>';
    }
}
