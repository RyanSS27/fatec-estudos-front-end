CREATE DATABASE atividade_avaliativa_p2;
USE atividade_avaliativa_p2;

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);

-- Inserindo categorias básicas para o formulário de cadastro funcionar
INSERT INTO categorias (nome) VALUES ('Bebidas'), ('Padaria'), ('Limpeza');