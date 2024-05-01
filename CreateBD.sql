## CRIAR SEU BANCO DE DADOS

USE empresa;

create table pessoas(
    cod_pessoa integer primary key AUTO_INCREMENT,
    nome varchar(200) not null,
    endereco varchar(250) not null,
    telefone varchar(16) not null,
    email varchar(250) not null,
    data_nascimento date not null
);

create table usuario(
    id_usuario integer primary key AUTO_INCREMENT,
    nome varchar(150) not null,
    login varchar(150) not null,
    senha varchar(150) not null
);

INSERT INTO `usuario`(`nome`, `login`, `senha`) VALUES ('Administrador','admin', md5('admin'));