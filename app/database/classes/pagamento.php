<?php

abstract class Pagamento {
    protected $numeroCartao;
    protected $valor;
    protected $formaPagamento;


    public function realizarPagamento() {   
        return "$this->formaPagamento. R$$this->valor. ";
    }

    public function getFormaPagamento() {
        return $this->formaPagamento;
    }
}

//CLASSE CREDITO
class PagamentoCredito extends Pagamento {
    protected $parcelas;

    public function __construct($formaPagamento, $numeroCartao, $valor, $parcelas) {
        $this->formaPagamento = $formaPagamento;
        $this->numeroCartao = $numeroCartao;
        $this->valor = $valor;
        $this->parcelas = $parcelas;
    }

    public function realizarPagamento() {
        return "$this->formaPagamento. R$$this->valor em $this->parcelas"."x";
    }

}

//CLASSE DEBITO
class PagamentoDebito extends Pagamento {
    public function __construct($formaPagamento, $numeroCartao, $valor) {
       $this->formaPagamento = $formaPagamento;
       $this->numeroCartao = $numeroCartao;
       $this->valor = $valor;
    }
}

$pagamento1 = new PagamentoDebito("Débito", "1234 5678", "450");
$pagamento2 = new PagamentoCredito("Crédito", "5678 1234", "500", "2");