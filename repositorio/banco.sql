create database sushiyama;
use sushiyama;
create table usuario (
nome varchar(255),
email varchar(255) primary key,
senha varchar(255));
select * from usuario;

create table produtos (
cod_produto int primary key,
nome varchar(255),
descrição varchar(255),
preco decimal(6,2), 
imagem varchar (100));
select * from produtos;