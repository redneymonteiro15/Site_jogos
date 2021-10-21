create database teste;
create table teste(
cod int auto_increment,
nome varchar(30),
primary key (cod)
);

insert into teste value
('1', 'João'),
('2', 'Maria');

select * from teste;