drop database if exists orange;
create database orange;

use orange;

create table client (
    idclient int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    email varchar(50),
    primary key (idclient)

);

create table produit (
    idproduit int(3) not null auto_increment,
    designation varchar(50),
    prixachat varchar(50),
    etat varchar(50),
    dateachat date,
    idclient int(3) not null,
    primary key (idproduit),
    foreign key (idclient) references client(idclient)

);


create table technicien (
    idtechnicien int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    qualification varchar(50),
    primary key (idtechnicien)

);


create table intervention (
    idinter  int(3) not null auto_increment,
    dateinter date,
    prixinter varchar(50),
    rapport varchar(255),
    idproduit int(3) not null ,
    idtechnicien int(3) not null ,
    primary key (idinter),
    foreign key (idproduit) references produit(idproduit),
    foreign key (idtechnicien) references technicien(idtechnicien)



);


create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(250),
    role enum("user", "admin"),
    primary key (iduser)
);
insert into user values (null , 'Adam', 'Anes', 'a@gmail.com' , '123', 'user');
insert into user values (null , 'Christina', 'Ibtissam', 'b@gmail.com' , '456', 'admin');