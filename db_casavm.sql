create table usuario(
id_usuario int not null auto_increment,
login varchar(30) not null,
senha varchar (30) not null,
nome varchar (30) not null,
primary key(id_usuario)
);

create table comodos(
id_comodo int not null auto_increment,
nome varchar (30) not null,
primary key(id_comodo)
);

create table tarefa(
id_tarefa int not null auto_increment,
descricao varchar(100) not null,
data_cadastro date,
data_execucao date,
nome_pessoa varchar (30),
nome varchar (30) not null,
primary key(id_tarefa));

show databases;

show tables  ;
use casavm;
desc tarefa	 ;	

insert into tarefa values ("","Limpar o Quarto", 24012023," ","amanda", "matheus","Quarto");

select descricao from tarefa;
select * from tarefa;
alter table tarefa 
add column nome_executor varchar(30);

insert into tarefa values ( ' ', 'Limpar a gelade...', '27/01/2023', 'Limpar geladeir...', ' ', 'cozinha','amanda');

