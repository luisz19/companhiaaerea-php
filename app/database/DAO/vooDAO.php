<?php

require_once('../conexao.php');
require_once(__DIR__ . '/../classes/voo.php');



// CREATE TABLE voos (
// 	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     num_voo INTEGER NOT NULL,
//     origem VARCHAR(20),
//     destino VARCHAR(20),
//     data_partida DATE,
//     data_chegada DATE,
//     hora_saida TIME,
//     hora_chegada TIME,
//     vagas INTEGER,
//     preco FLOAT(10,2),
//     comp_aerea VARCHAR(20)
// );

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

// $voo1 = new Voo('123', 'PA', 'BA', '2022-01-01', '2022-01-02', '08:00:00', '10:00:00', 100, 'Red', 200.00);
// $voo1_DAO = new VooDAO();
// $voo1_DAO ->create($voo1); 



