<?php 
// CREATE TABLE reserva (
// 	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     assento_reservado INTEGER,
//     passageiro_nome VARCHAR(30)
//     id_passageiro INTEGER,
//     FOREIGN KEY (id_passageiro) REFERENCES passageiro(id),
//     id_voo INTEGER,
//     FOREIGN KEY (id_voo) REFERENCES voos(id)
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