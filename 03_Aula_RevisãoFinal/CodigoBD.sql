#Criando o DB
CREATE DATABASE migo;

#SELECIONANDO A TABELA
USE migo;

#CRIANDO TABELA
CREATE TABLE migo(
	id_migo INT AUTO_INCREMENT,
    nome_migo VARCHAR(45),
    sobrenome_Migo VARCHAR(45),
    mae_do_migo VARCHAR(45),
    PRIMARY KEY (id_migo)
);