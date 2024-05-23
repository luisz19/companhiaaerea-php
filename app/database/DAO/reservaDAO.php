<?php 
// CREATE TABLE reserva (
// 	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     assento_reservado INTEGER,
//     passageiro_nome VARCHAR(30)
//     id_passageiro INTEGER,
//     FOREIGN KEY (id_passageiro) REFERENCES passageiro(id),
//     id_voo INTEGER,
//     FOREIGN KEY (id_voo) REFERENCES voos(id) tirar chave estrangeira
//     tirar pagamento
// );

include_once ('../classes/reserva.php');
require_once(__DIR__ . '/../conexao.php');

class reservaDAO {

public function create(Reserva $reserva) {
    $sql = 'INSERT INTO reserva (assento_reservado, passageiro_nome, id_voo) VALUES (?, ?, ?)';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $reserva->getAssentoReserva());
    $stmt->bindValue(2, $reserva->getPassageiro());
    $stmt->bindValue(3, $reserva->getIdVoo());
    
    $stmt->execute();
}



public function read() {
    $sql = 'SELECT * FROM reserva';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    } else {
        return [];
    }
}

public function update(Reserva $reserva) { 
    $sql = 'UPDATE reserva  SET assento_reservado = ?, nome_passageiro = ?, id_voo = ?, WHERE id = ?';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $reserva->getAssentoReserva());
    $stmt->bindValue(2, $reserva->getPassageiro());
    $stmt->bindValue(3, $reserva->getIdVoo());

    $stmt->execute();
}

public function delete(Reserva $reserva) {
    $sql = 'DELETE FROM voos WHERE id = ?';
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $reserva->getId());
    $stmt->execute();
}



}


// $reserva1 = new Reserva('19', 'Thanos', 4);
// $reserva1_DAO = new reservaDAO();
// $reserva1_DAO->create($reserva1); 
