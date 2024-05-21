<?php

class Reserva{
  protected $id;
  protected $num_reserva;
  protected $num_voo;
  protected $origem;
  protected $destino;
  protected $voo_associado;
  protected $assento_reserva;
  protected $passageiro;
  protected $pagamento;
  protected $id_voo;

  public function __construct($assento_reserva, $passageiro, $id_voo) {
      
      $this->assento_reserva = $assento_reserva;
      $this->passageiro = $passageiro;
      $this->id_voo = $id_voo;
  }

  public function getPassageiro() {
      return $this->passageiro;
  }

  public function getIdVoo() {
    return $this->id_voo;
  }

  public function getId() {
    return $this->id;
  }

  public function getVooAssociado() {
      return $this->voo_associado;
  }

  public function getOrigem() {
      return $this->origem;
  }

  public function getDestino() {
      return $this->destino;
  }

  public function getNumVoo() {
      return $this->num_voo;
  }

  public function getAssentoReserva() {
      return $this->assento_reserva;
  }

  public function getNumReserva() {    return $this->num_reserva;
  }

  public function getPagamento() {
    return $this->pagamento;
  }

  public function setPassageiro($passageiro) {
    $this->passageiro = $passageiro;
}

public function setIdVoo($id_voo) {
    $this->id_voo = $id_voo;
  }

  public function setId($id) {
    $this->id = $id;
  }

public function setVooAssociado($voo_associado) {
    $this->voo_associado = $voo_associado;
}

public function setOrigem($origem) {
    $this->origem = $origem;
}

public function setDestino($destino) {
    $this->destino = $destino;
}

public function setNumVoo($num_voo) {
    $this->num_voo = $num_voo;
}

public function setAssentoReserva($assento_reserva) {
    $this->assento_reserva = $assento_reserva;
}

public function setNumReserva($num_reserva) {
    $this->num_reserva = $num_reserva;
}

public function setPagamento($pagamento) {
    $this->pagamento = $pagamento;
}

}

//info reserva
// $reservas = array(); //array para armazenar as reservas

// $reserva1 = new Reserva("134", $voo1, $voo1, $voo1, $voo1, "5", $passageiro1, $pagamento1);
// $reservas[] = $reserva1;

// $reserva2 = new Reserva("136", $voo2, $voo2, $voo2, $voo2, "10", $passageiro2, $pagamento2);
// $reservas[] = $reserva2;
