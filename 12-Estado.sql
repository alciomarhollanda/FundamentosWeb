create table estado(
	idEstado int primary key auto_increment,
    nomeEstado varchar(100) not null
);

insert into estado(nomeEstado) values ("São Paulo");

select * from estado;