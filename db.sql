--backup

CREATE TABLE passageiro (
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    cpf INTEGER,
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
    passageiro_nome VARCHAR(30)
    id_passageiro INTEGER,
    FOREIGN KEY (id_passageiro) REFERENCES passageiro(id),
    id_voo INTEGER,
    FOREIGN KEY (id_voo) REFERENCES voos(id)
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

