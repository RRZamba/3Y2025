CREATE DATABASE alunosfofos;

CREATE TABLE alunos
(
	id INT AUTO_INCREMENT,
	nome VARCHAR(45),
	sobrenome VARCHAR(45),
	curso VARCHAR(45),
	endereco VARCHAR(45),
	PRIMARY KEY(id)
);

INSERT INTO alunos(nome,sobrenome,curso,endereco )
VALUES ('John','Rambo','IF','Arizona'),
	   ('Johnny','Depp','DS','SBC'),
	   ('Claudia','Claudio','ADM','Minesota'),
	   ('Maria','José','QUI','New York'),
	   ('Sua','Mãe','ADM','Mauá')