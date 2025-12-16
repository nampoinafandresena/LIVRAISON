create database livraison;
use livraison;

CREATE TABLE livraison(
    id int primary key AUTO_INCREMENT,
    id_entrepot int ,
    status varchar(50)
    date_livraison date,
    id_destination int,
    id_vehicule int,
    id_livreur int,
    carburant float
);

CREATE TABLE zone_livraison(
    id int primary key AUTO_INCREMENT,
    zone_livraison VARCHAR(50)
);

CREATE TABLE revientparkg(
    prixkg float
);

CREATE TABLE  colis(
    id int primary key AUTO_INCREMENT,
    id_livraison int,
    description text,
    poids float
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
    salaire float
);
