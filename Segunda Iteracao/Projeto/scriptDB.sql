create database sistema_academico;
use sistema_academico;

create table pessoa(
	id int not null AUTO_INCREMENT,
	nome varchar(100),
	dataNascimento date,
	cpf varchar(11),
	matricula varchar(5),
	tipo enum('Professor','Assistente','Administrador','Aluno') DEFAULT NULL,
	primary key (id)
);

CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	id_pessoa INTEGER,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL,
	foreign key (id_pessoa) references pessoa(id)
);

create table curso(
	id int not null AUTO_INCREMENT,
	nome varchar(100),
	tipo enum ('Medio','Superior'),
	primary key (id)
);

create table disciplina(
	id int not null AUTO_INCREMENT,
	id_curso int,
	nome varchar(100),
	creditos int (2),
	cargaHorario int (3),
	primary key (id),
	foreign key (id_curso) references curso(id)
);

create table turma(
	id int not null AUTO_INCREMENT,
	id_disciplina int,
	id_pessoa int,
	nome varchar(30),
	dataInicio date,
	dataFinal date,
	diasSemana varchar(50),
	periodo varchar (6),
	primary key(id),
	foreign key (id_disciplina) references disciplina(id),
	foreign key (id_pessoa) references pessoa(id)
);

create table aula(
	id int not null AUTO_INCREMENT,
	id_turma int,
	dataAula date,
	conteudo text,
	primary key(id),
	foreign key (id_turma) references turma(id)
);

insert into pessoa (nome, dataNascimento, cpf, matricula, tipo) values ("Rogerio Tessari", "1970-01-01", "12345678910", "00001", "Professor");
insert into pessoa (nome, dataNascimento, cpf, matricula, tipo) values ("Mauricio Rosito", "1970-01-01", "12345678911", "00002", "Professor");
insert into pessoa (nome, dataNascimento, cpf, matricula, tipo) values ("Rafael Jaques", "1970-01-01", "12345678912", "00003", "Professor");

insert into tbl_user (id_pessoa, username, password, email) values (1, "Rogerio", "123", "rogerio.tessario@ifrs.edu.br");
insert into tbl_user (id_pessoa, username, password, email) values (2, "Mauricio", "123", "mauricio.rosito@ifrs.edu.br");
insert into tbl_user (id_pessoa, username, password, email) values (3, "Rafael", "123", "rafael.jaques@ifrs.edu.br");

insert into curso (nome, tipo) values ("Analise e Desenvolvimento de Sistemas", "Superior");

insert into disciplina (id_curso, nome, creditos, cargaHorario) values (1, "Programacao I", 6, 90);
insert into disciplina (id_curso, nome, creditos, cargaHorario) values (1, "Gerencia de Projetos", 4, 60);

insert into turma (id_disciplina, id_pessoa, nome, dataInicio, dataFinal, periodo, diasSemana) values (1, 1, "ADS.2014.1.ProgramacaoI", "2014-02-20", "2014-07-01", "2014/1", "0,0,0,Quinta,0,0");
insert into turma (id_disciplina, id_pessoa, nome, dataInicio, dataFinal, periodo, diasSemana) values (2, 2, "ADS.2014.1.GerenciaDeProjetos", "2014-02-20", "2014-07-01", "2014/1", "0,0,0,Quarta,Sexta,0");