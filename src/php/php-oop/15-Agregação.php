<?php
// Agregação
// Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte de si própria.

class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe() {
        foreach ($this->produtos as $produto) {
            echo $produto->nome.'<br>';
            echo $produto->valor.'<hr>';
        }
    }
}

$produto1 = new Produtos("Notebook", "R$ 1500,99");
$produto2 = new Produtos("Mouse", "R$ 50,00");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();