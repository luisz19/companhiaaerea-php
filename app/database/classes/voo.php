<?php

class Voo {
   protected $id;
   protected $num_voo;
   protected $origem;
   protected $destino;
   protected $data_partida;
   protected $data_chegada;
   protected $hora_saida;
   protected $hora_chegada;
   protected $assentos_disponiveis;
   protected $preco;
   protected $comp_aerea_assoc;

   public function __construct( $num_voo, $origem, $destino, $data_partida, $data_chegada, $hora_saida, $hora_chegada, $assentos_disponiveis, $comp_aerea_assoc, $preco) {
      $this->num_voo = $num_voo;
      $this->origem = $origem;
      $this->destino = $destino;
      $this->data_partida = $data_partida;
      $this->data_chegada = $data_chegada;
      $this->hora_saida = $hora_saida;
      $this->hora_chegada = $hora_chegada;
      $this->assentos_disponiveis = $assentos_disponiveis;
      $this->comp_aerea_assoc = $comp_aerea_assoc;
      $this->preco = $preco;
   }
 
   // Getters
   public function getId () {
      return $this->id;
   }

   public function getNumVoo() {
     return $this->num_voo;
   }
 
   public function getOrigem() {
     return $this->origem;
   }
 
   public function getDestino() {
     return $this->destino;
   }
 
   public function getDataPartida() {
     return $this->data_partida;
   }
 
   public function getDataChegada() {
     return $this->data_chegada;
   }

   public function getHoraSaida() {
      return $this->hora_saida;
    }
  
    public function getHoraChegada() {
      return $this->hora_chegada;
    }
 
   public function getAssentosDisponiveis() {
     return $this->assentos_disponiveis;
   }
 
   public function getPreco() {
     return $this->preco;
   }
 
   public function getCompAereaAssoc() {
     return $this->comp_aerea_assoc;
   }
 
   // Setters

   public function setId ($id) {
      $this->id = $id;
   }

   public function setNumVoo($num_voo) {
     $this->num_voo = $num_voo;
   }
 
   public function setOrigem($origem) {
     $this->origem = $origem;
   }
 
   public function setDestino($destino) {
     $this->destino = $destino;
   }
 
   public function setDataPartida($data_partida) {
     $this->data_partida = $data_partida;
   }
 
   public function setDataChegada($data_chegada) {
     $this->data_chegada = $data_chegada;
   }

   public function setHoraSaida($hora_saida) {
      $this->hora_saida = $hora_saida;
    }
  
    public function setHoraChegada($hora_chegada) {
      $this->hora_chegada = $hora_chegada;
    }
 
   public function setAssentosDisponiveis($assentos_disponiveis) {
     $this->assentos_disponiveis = $assentos_disponiveis;
   }
 
   public function setPreco($preco) {
     $this->preco = $preco;
   }
 
   public function setCompAereaAssoc($comp_aerea_assoc) {
     $this->comp_aerea_assoc = $comp_aerea_assoc;
   }
 }
// $voos = array();

// $voo1 = new Voo(12, "Petrolina", "Juazeiro", "24/04/2024 20:00", "24/04/2024 12:00", 100, "Azul", 450);
// $voos[] = $voo1;

// $voo2 = new Voo(15, "Petrolina", "Araripina", "24/04/2024 10:00", "24/04/2024 12:00", 98, "Verde", 500);
// $voos[] = $voo2;

// echo "Voôs disponíveis: \n\n";
// foreach ($voos as $voo) {
//     echo "Número do Voo: " . $voo->num_voo . "\n";
//     echo "Origem: " . $voo->origem . "\n";
//     echo "Destino: " . $voo->destino . "\n";
//     echo "Data e Hora de Partida: " . $voo->data_hora_partida . "\n";
//     echo "Data e Hora de Chegada: " . $voo->data_hora_chegada . "\n";
//     echo "Assentos Disponíveis: " . $voo->assentos_disponiveis . "\n";
//     echo "Preço: R$" . $voo->preco . "\n\n";
// }