create database sushiyama;
use sushiyama;

create table usuario (
nome varchar(255),
email varchar(255) primary key,
senha varchar(255));

select * from usuario;

create table produtos (
cod_produto int NOT NULL AUTO_INCREMENT,
nome varchar(100),
descricao varchar(100),
preco decimal(6,2), 
imagem varchar (100),
tipo varchar (10),
PRIMARY KEY (cod_produto)
);

select * from produtos;