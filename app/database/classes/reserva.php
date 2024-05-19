<?php

class Reserva{
  protected $num_reserva;
  protected $num_voo;
  protected $origem;
  protected $destino;
  protected $voo_associado;
  protected $assento_reserva;
  protected $passageiro;
  protected $pagamento;

  public function __construct($num_reserva, Voo $num_voo, Voo $origem, Voo $destino, Voo $voo_associado, $assento_reserva, Passageiro $passageiro, Pagamento $pagamento) {
      $this->num_reserva = $num_reserva;
      $this->num_voo = $num_voo;
      $this->origem = $origem;
      $this->destino = $destino;
      $this->voo_associado = $voo_associado;
      $this->assento_reserva = $assento_reserva;
      $this->passageiro = $passageiro;
      $this->pagamento = $pagamento;
  }

  public function getPassageiro() {
      return $this->passageiro;
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

}

//info reserva
$reservas = array(); //array para armazenar as reservas

$reserva1 = new Reserva("134", $voo1, $voo1, $voo1, $voo1, "5", $passageiro1, $pagamento1);
$reservas[] = $reserva1;

$reserva2 = new Reserva("136", $voo2, $voo2, $voo2, $voo2, "10", $passageiro2, $pagamento2);
$reservas[] = $reserva2;

foreach ($reservas as $reservas) {
  echo "Passagem do cliente \n";
  echo "Nome do passageiro: " . $reservas->getPassageiro()->getNome() . "\n";
  echo "Número da reserva: " . $reservas->getNumReserva() . "\n";
  echo "Número do voo: " . $reservas->getNumVoo()->num_voo . "\n";
  echo "Origem: " . $reservas->getOrigem()->origem . "\n";
  echo "Destino: " . $reservas->getDestino()->destino . "\n";
  echo "Companhia Aérea: " . $reservas->getVooAssociado()->comp_aerea_assoc . "\n";
  echo "Assento reservado: " . $reservas->getAssentoReserva() . "\n";
  echo "Forma de pagamento: " . $reservas->getPagamento()->realizarPagamento() . "\n\n";
}