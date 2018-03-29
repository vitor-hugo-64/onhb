create database onhb;
use onhb;

create table aluno(
	cod_aluno int not null,
	nome varchar(45),
	turma int(4),
	email varchar(45),
	nome_do_grupo varchar(45)
);

alter table aluno
add constraint pk_aluno
primary key(cod_aluno);