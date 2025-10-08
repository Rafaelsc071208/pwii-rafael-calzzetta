CREATE DATABASE banco;
Use banco;
CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf INT UNIQUE NOT NULL,
    idade INT NOT NULL
  
);
