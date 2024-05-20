<?php 

require_once('../conexao.php');
require_once(__DIR__ . '/../classes/passageiro.php');

// CREATE TABLE passageiro (
// 	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     nome VARCHAR(30) NOT NULL,
//     cpf INTEGER,
//     email VARCHAR(30) NOT NULL,
//     tel INTEGER,
//     num_passaporte INTEGER NOT NULL
// );

class PassageiroDAO {

    public function create(Passageiro $passageiro) {
        $sql = 'INSERT INTO passageiro (nome, email, tel, num_passaporte, cpf) VALUES (?, ?, ?, ?, ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        
        $stmt->bindValue(1, $passageiro->getNome());
        $stmt->bindValue(2, $passageiro->getEmail());
        $stmt->bindValue(3, $passageiro->getTel());
        $stmt->bindValue(4, $passageiro->getNumPassaporte());
        $stmt->bindValue(5, $passageiro->getCPF());
       

        $stmt->execute();
    }



    public function read() {
        $sql = 'SELECT * FROM passageiro';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function update(Passageiro $passageiro) { 
        $sql = 'UPDATE passageiro  SET nome = ?,  email = ?, tel = ?, num_passaporte = ?, cpf = ? WHERE id = ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passageiro->getNome());
        $stmt->bindValue(2, $passageiro->getEmail());
        $stmt->bindValue(3, $passageiro->getTel());
        $stmt->bindValue(4, $passageiro->getNumPassaporte());
        $stmt->bindValue(5, $passageiro->getCPF());

        $stmt->execute();
    }

    public function delete(Passageiro $passageiro) {
        $sql = 'DELETE FROM passageiro WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passageiro->getId());

        $stmt->execute();
    }

}


// $passageiro6 = new Passageiro('Chwww', 'pass123@mail.com', 234, 423, 123);
// $passageiro6_DAO = new PassageiroDAO();
// $passageiro6_DAO->create($passageiro6); 