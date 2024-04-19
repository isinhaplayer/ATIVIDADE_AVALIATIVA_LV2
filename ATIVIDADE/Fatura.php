<?php

class Fatura
{
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoPorItem;

    public function getNumero()
    {
        return $this->numero;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function getPrecoPorItem()
    {
        return $this->precoPorItem;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function setPrecoPorItem($precoPorItem)
    {
        if ($precoPorItem > 0) {
            $this->precoPorItem = $precoPorItem;
        } else {
            $this->precoPorItem = 0.0;
        }
    }

      public function getTotalFatura()
    {
        $total = $this->quantidade * $this->precoPorItem;

        if ($total > 0) {
            return $total;
        } else {
            return 0;
        }
    }
}

?>