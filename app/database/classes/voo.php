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
$voos = array();

$voo1 = new Voo(12, "Petrolina", "Juazeiro", "24/04/2024 20:00", "24/04/2024 12:00", 100, "Azul", 450);
$voos[] = $voo1;

$voo2 = new Voo(15, "Petrolina", "Araripina", "24/04/2024 10:00", "24/04/2024 12:00", 98, "Verde", 500);
$voos[] = $voo2;

echo "Voôs disponíveis: \n\n";
foreach ($voos as $voo) {
    echo "Número do Voo: " . $voo->num_voo . "\n";
    echo "Origem: " . $voo->origem . "\n";
    echo "Destino: " . $voo->destino . "\n";
    echo "Data e Hora de Partida: " . $voo->data_hora_partida . "\n";
    echo "Data e Hora de Chegada: " . $voo->data_hora_chegada . "\n";
    echo "Assentos Disponíveis: " . $voo->assentos_disponiveis . "\n";
    echo "Preço: R$" . $voo->preco . "\n\n";
}