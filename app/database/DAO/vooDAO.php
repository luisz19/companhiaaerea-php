<?php

require_once(__DIR__ . '/../conexao.php');
require_once(__DIR__ . '/../classes/voo.php');

class VooDAO {

   public function create(Voo $voos) {
       $sql = 'INSERT INTO voos (num_voo, origem, destino, data_partida, data_chegada, hora_saida, hora_chegada, vagas, preco, comp_aerea) VALUES (?, ?, ?, ? , ?, ?, ?, ?, ?, ?)';
       $stmt = Conexao::getConn()->prepare($sql);
       $stmt->bindValue(1, $voos->getNumVoo());
       $stmt->bindValue(2, $voos->getOrigem());
       $stmt->bindValue(3, $voos->getDestino());
       $stmt->bindValue(4, $voos->getDataPartida());
       $stmt->bindValue(5, $voos->getDataChegada());
       $stmt->bindValue(6, $voos->getHoraSaida());
       $stmt->bindValue(7, $voos->getHoraChegada());
       $stmt->bindValue(8, $voos->getAssentosDisponiveis());
       $stmt->bindValue(9, $voos->getPreco());
       $stmt->bindValue(10, $voos->getCompAereaAssoc());
       $stmt->execute();
   }

   

   public function read() {
       $sql = 'SELECT * FROM voos';
       $stmt = Conexao::getConn()->prepare($sql);
       $stmt->execute();
       if ($stmt->rowCount() > 0) {
           $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
           return $resultado;
       } else {
           return [];
       }
   }

   public function update(Voo $voos) { 
       $sql = 'UPDATE voos  SET num_voo = ?, origem = ?, destino = ?, data_partida = ?, data_chegada = ?, hora_saida = ?, hora_chegada = ?, vagas = ?, preco = ?, comp_aerea = ?, WHERE id = ?';
       $stmt = Conexao::getConn()->prepare($sql);
       $stmt->bindValue(1, $voos->getNumVoo());
       $stmt->bindValue(2, $voos->getOrigem());
       $stmt->bindValue(3, $voos->getDestino());
       $stmt->bindValue(4, $voos->getDataPartida());
       $stmt->bindValue(5, $voos->getDataChegada());
       $stmt->bindValue(6, $voos->getHoraSaida());
       $stmt->bindValue(7, $voos->getHoraChegada());
       $stmt->bindValue(8, $voos->getAssentosDisponiveis());
       $stmt->bindValue(9, $voos->getPreco());
       $stmt->bindValue(10, $voos->getCompAereaAssoc());
       $stmt->execute();
   }

   public function delete(Voo $voos) {
       $sql = 'DELETE FROM voos WHERE id = ?';
       $stmt = Conexao::getConn()->prepare($sql);
       $stmt->bindValue(1, $voos->getId());
       $stmt->execute();
   }
   


}

$voo = new Voo('123', 'PA', 'BA', '2022-01-01', '2022-01-02', '08:00:00', '10:00:00', 100, 'Azul', 200.00);
$vooDAO = new VooDAO();
$vooDAO ->create($voo);  
//Inserindo na tabela 

$voo2 = new Voo('132', 'PE', 'CE', '2023-01-02', '2023-01-04', '09:00:00', '11:00:00', 65, 'Verde', 1200.00);
$voo_2_DAO = new VooDAO();
$voo_2_DAO ->create($voo2); 

$voo3 = new Voo('150', 'SE', 'PA', '2024-01-02', '2025-01-04', '09:00:00', '11:00:00', 90, 'Amarelo', 12200.00);
$voo_3_DAO = new VooDAO();
$voo_3_DAO ->create($voo3);

$voo4 = new Voo('421', 'RJ', 'CE', '2022-01-02', '2022-01-04', '09:00:00', '19:00:00', 65, 'Rosa', 9200.00);
$voo_4_DAO = new VooDAO();
$voo_4_DAO ->create($voo4);

// $voo1 = new Voo('123', 'PA', 'BA', '2022-01-01', '2022-01-02', '08:00:00', '10:00:00', 100, 'Red', 200.00);
// $voo1_DAO = new VooDAO();
// $voo1_DAO ->create($voo1); 



