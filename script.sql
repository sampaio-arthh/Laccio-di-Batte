create table pedido (
	id_pedido int auto_increment not null,
	tipo char(1) not null;
	sabor1 varchar(20) not null,
	sabor2 varchar(20) not null,
	sabor3 varchar(20) not null,
	sabor4 varchar(20) not null,
	constraint pk_pedido primary key (id_pedido)
);
create table avaliacao (
	id_aval int auto_increment not null,
	nota_sabores int not null,
	nota_tempo int not null,
	nota_sistema int not null,
	opiniao varchar(200),
	constraint pk_aval primary key (id_aval)
);