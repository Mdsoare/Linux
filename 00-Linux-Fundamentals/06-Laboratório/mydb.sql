CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    endereco VARCHAR(150),
    cidade VARCHAR(50),
    host VARCHAR(50)
);