create database bdparra;
use bdparra;

--crear las tablas
create table propiedades(
id int(11) primary key auto_increment,
title varchar(32) not null,
price float(10.2) not null,
description longtext,
rooms int, wc int,
garage int,
timesnap date,
id_vendedor int not null)

create table vendedor(
id int(11) PRIMARY KEY AUTO_INCREMENT not null,
name varchar(32) not null,
email VARCHAR(32) not null,
phone varchar(32) not null
)

alter table propiedades
add constraint id_vendedor
FOREIGN KEY (id_vendedor) REFERENCES vendedor(id);

--inserts a la bd
insert into vendedor(name, email, phone)
values ("foo Bar", "Foo@bar.com", "123456789")

insert into propiedades(title, price, id_vendedor)
values("Bar foo", 50000, 1)

select * from vendedor

select * from propiedades
