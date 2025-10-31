CREATE DATABASE cadastroP;

use cadastroP;

CREATE TABLE pessoa (
  cpf char(14) NOT NULL PRIMARY KEY,
  nome varchar(100) NULL,
  contato char(11) NULL
);
insert into pessoa(cpf, nome, contato, senha) values (5783923,"Cazaquistão Mohammed Alli", "12345678901", "1234567890" );

 select * from pessoa;
 
create table agenda(
  cod int primary key auto_increment,
  cpf char(14) not null,
  foreign key (cpf) references pessoa(cpf),
  data date not null,
  descricao varchar(100) not null
);
select * from agenda;

insert into agenda(cpf,data,descricao,horario) values(5783923,'2020-02-02',"sdasadsadsdads","00:00:00");

alter table pessoa add senha varchar(20) not null;
alter table agenda add horario time not null;

delete from agenda where cpf ="5783923"; 