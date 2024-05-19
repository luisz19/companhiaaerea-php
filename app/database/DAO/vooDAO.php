<?php

class Voo {
  public $num_voo;
  public $origem;
  public $destino;
  public $data_hora_partida;
  public $data_hora_chegada;
  public $assentos_disponiveis;
  public $preco;
  public $comp_aerea_assoc;

   public function __construct($num_voo, $origem, $destino, $data_hora_partida, $data_hora_chegada, $assentos_disponiveis, $comp_aerea_assoc, $preco){
      $this->num_voo = $num_voo;
      $this->origem = $origem;
      $this->destino = $destino;
      $this->data_hora_partida = $data_hora_partida;
      $this->data_hora_chegada = $data_hora_chegada;
      $this->assentos_disponiveis = $assentos_disponiveis;
      $this->comp_aerea_assoc = $comp_aerea_assoc;
      $this->preco = $preco;
   }

   
} 

