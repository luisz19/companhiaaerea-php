--backup

CREATE TABLE passageiro (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    tel INTEGER,
    num_passaporte INTEGER NOT NULL
);

CREATE TABLE pagamento(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    forma_pagamento VARCHAR(20),
    num_cartao INTEGER,
    valor DECIMAL(10,2),
    parcelas INTEGER,
    id_passageiro INTEGER,
    FOREIGN KEY(id_passageiro) REFERENCES passageiro(id)
);

CREATE TABLE reserva (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    assento_reservado INTEGER,
    passageiro_nome VARCHAR(30),
    origem VARCHAR(20),
    destino VARCHAR(20),
    data_partida DATE,
    data_chegada DATE,
    hora_partida TIME
);

CREATE TABLE pass_reserva (
	id_passageiro INTEGER NOT NULL,
    id_reserva INTEGER NOT NULL,
    PRIMARY KEY (id_passageiro, id_reserva),
    FOREIGN KEY (id_passageiro) REFERENCES passageiro(id),
    FOREIGN KEY (id_reserva) REFERENCES reserva(id)
);

CREATE TABLE voos (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    num_voo INTEGER NOT NULL,
    origem VARCHAR(20),
    destino VARCHAR(20),
    data_partida DATE,
    data_chegada DATE,
    hora_saida TIME,
    hora_chegada TIME,
    vagas INTEGER,
    preco FLOAT(10,2),
    comp_aerea VARCHAR(20)
);

ALTER TABLE reserva
DROP COLUMN origem,
DROP COLUMN destino,
DROP COLUMN data_partida,
DROP COLUMN data_chegada,
DROP COLUMN hora_partida;

ALTER TABLE reserva
ADD COLUMN id_voo INTEGER,
ADD FOREIGN KEY (id_voo) REFERENCES voos(id);

DROP TABLE pass_reserva;

ALTER TABLE reserva
ADD COLUMN id_passageiro INTEGER,
ADD FOREIGN KEY (id_passageiro) REFERENCES passageiro(id);