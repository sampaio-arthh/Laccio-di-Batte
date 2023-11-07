create table pedido (
	id_pedido int auto_increment not null,
	tipo char(1) not null,
	sabor1 varchar(20) not null,
	sabor2 varchar(20) not null,
	sabor3 varchar(20) not null,
	sabor4 varchar(20) not null,
	constraint pk_pedido primary key (id_pedido)
);
create table avaliacao (
	id_aval int not null,
	sabor int not null,
	tempo int not null,
	sistema int not null,
	constraint pk_aval primary key (id_aval)
);