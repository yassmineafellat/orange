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
)Engine=InnoDB;
   

create table produit (
    idproduit int(3) not null auto_increment,
    designation varchar(50),
    prixachat varchar(50),
    etat varchar(50),
    dateachat date,
    idclient int(3) not null,
    primary key (idproduit),
    foreign key (idclient) references client(idclient) ON DELETE CASCADE
ON UPDATE CASCADE
    ) ENGINE=InnoDB;


create table technicien (
    idtech int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    qualification varchar(50),
    primary key (idtech)
)ENGINE=InnoDB;


CREATE TABLE intervention (
    idinter INT(3) NOT NULL AUTO_INCREMENT,
    dateinter DATE,
    prixinter VARCHAR(50),
    rapport TEXT,
    idproduit INT(3) NOT NULL,
    idtech INT(3) NOT NULL,
    PRIMARY KEY (idinter),
    FOREIGN KEY (idproduit) REFERENCES produit(idproduit) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idtech) REFERENCES technicien(idtech) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

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
