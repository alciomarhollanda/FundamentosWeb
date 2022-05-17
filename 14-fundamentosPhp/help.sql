CREATE TABLE PRODUTO(
	IdProduto INT PRIMARY KEY AUTO_INCREMENT,
	nomeProduto VARCHAR(50) NOT NULL,
    precoProduto float not null
);

INSERT into produto (nomeProduto, precoProduto) values ("Pizza de frango", 55);
INSERT into produto (nomeProduto, precoProduto) values ("Coxinha de frango", 7);
INSERT into produto (nomeProduto, precoProduto) values ("Contrafilé",49);


create table pessoa(
	idPessoa int PRIMARY key AUTO_INCREMENT,
	nomePessoa varchar(50) not null,
	emailPessoa varchar(50) not null,
	idadePessoa int not null
);

insert into pessoa (nomePessoa,emailPessoa,idadePessoa)
values ("Alciomar Hollanda", "alciomar@gmail.com",29);

insert into pessoa (nomePessoa,emailPessoa,idadePessoa)
values ("Ackley Dias Will", "ackley@gmail.com",32);

insert into pessoa (nomePessoa,emailPessoa,idadePessoa)
values ("Rafael", "rafael@gmail.com",26);