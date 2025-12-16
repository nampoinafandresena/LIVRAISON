create database livraison;
use livraison;

CREATE TABLE livraison(
    id int primary key AUTO_INCREMENT,
    id_entrepot int ,
    statut varchar(50)
    date_livraison date,
    id_destination int,
    id_vehicule int,
);

CREATE TABLE destination(
    id int primary key AUTO_INCREMENT,
    adresse VARCHAR(50)
);


CREATE TABLE  colis(
    id int primary key AUTO_INCREMENT,
    id_livraison int,
);

CREATE TABLE entrepot(
    id int primary key AUTO_INCREMENT,
    adresse varchar(50),

);

CREATE TABLE vehicule(
    id int primary key AUTO_INCREMENT,
    immatriculation varchar(70)
);

CREATE TABLE livreur(
    id int primary key AUTO_INCREMENT,
    nom varchar(70),
);
