DROP DATABASE IF EXISTS livraison_db;
CREATE DATABASE livraison_db;
USE livraison_db;

CREATE TABLE entrepot (
    id_entrepot INT AUTO_INCREMENT PRIMARY KEY,
    adresse VARCHAR(150) NOT NULL
);

CREATE TABLE vehicule (
    id_vehicule INT AUTO_INCREMENT PRIMARY KEY,
    immatriculation VARCHAR(20) NOT NULL
);

CREATE TABLE livreur (
    id_livreur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    salaire DECIMAL(10,2) NOT NULL
);

CREATE TABLE colis (
    id_colis INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(100),
    poids DECIMAL(10,2) NOT NULL
);

CREATE TABLE status (
    id_status INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(20) NOT NULL
);

CREATE TABLE livraison (
    id_livraison INT AUTO_INCREMENT PRIMARY KEY,
    id_colis INT NOT NULL,
    id_entrepot INT NOT NULL,
    destination VARCHAR(150) NOT NULL,
    id_status INT NOT NULL,
    id_livreur INT NOT NULL,
    id_vehicule INT NOT NULL,
    carburant DECIMAL(10,2) NOT NULL,
    date_livraison DATE NOT NULL,

    FOREIGN KEY (id_colis) REFERENCES colis(id_colis),
    FOREIGN KEY (id_entrepot) REFERENCES entrepot(id_entrepot),
    FOREIGN KEY (id_status) REFERENCES status(id_status),
    FOREIGN KEY (id_livreur) REFERENCES livreur(id_livreur),
    FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule)
);

CREATE TABLE chiffredaffaire (
    prixkg FLOAT NOT NULL
);

/* INSERTIONS DE DONNEES */

/* Status */
INSERT INTO status (libelle) VALUES
('en attente'),
('livré'),
('annulé');

/* Entrepot (unique) */
INSERT INTO entrepot (adresse) VALUES
('Entrepôt Central – Zone Industrielle');

/* Livreurs */
INSERT INTO livreur (nom, salaire) VALUES
('Jean', 15000),
('Paul', 12000),
('Marc', 18000);

/* Vehicules */
INSERT INTO vehicule (immatriculation) VALUES
('ABC-123'),
('XYZ-456'),
('LMN-789');

/* Colis */
INSERT INTO colis (description, poids) VALUES
('Ordinateur portable', 10),
('Téléphone mobile', 5),
('Meuble', 20),
('Télévision', 12),
('Réfrigérateur', 30);


-- chiffredaffaire
    INSERT INTO chiffredaffaire (prixkg) VALUES (4000);

/* Livraisons (dates sur plusieurs mois) */
INSERT INTO livraison VALUES
(NULL, 1, 1, 'Lot II A 25, Antananarivo', 2, 1, 1, 5000, '2025-01-10'),
(NULL, 2, 1, 'Rue des Banques, Antananarivo', 2, 2, 2, 4000, '2025-01-25'),
(NULL, 3, 1, 'Ambodivona, Antananarivo', 2, 3, 3, 8000, '2025-02-05'),
(NULL, 4, 1, 'Analakely, Antananarivo', 2, 1, 2, 6000, '2025-02-18'),
(NULL, 5, 1, 'Ivandry, Antananarivo', 2, 2, 1, 9000, '2025-03-03'),
(NULL, 1, 1, 'Ambohimanarina, Antananarivo', 1, 3, 3, 3000, '2025-03-15'),
(NULL, 2, 1, 'Ankorondrano, Antananarivo', 3, 1, 2, 2000, '2025-04-01');

-- Vues

CREATE OR REPLACE VIEW v_liste_livraison as 
SELECT l.id_livraison, l.destination , ch.nom as chauffeur , v.immatriculation as vehicule , co.description as colis ,e.adresse as entrepot , s.libelle as status
from livraison l 
join colis co on l.id_colis = co.id_colis 
join livreur ch on l.id_livreur = ch.id_livreur 
join vehicule v on l.id_vehicule = v.id_vehicule 
join status s on s.id_status = l.id_status 
join entrepot e on l.id_entrepot = e.id_entrepot ;

CREATE OR REPLACE VIEW v_status_livraison as 
SELECT l.id_livraison, l.destination , ch.nom as chauffeur , v.immatriculation as vehicule , co.description as colis ,e.adresse as entrepot , s.id_status as status
from livraison l 
join colis co on l.id_colis = co.id_colis 
join livreur ch on l.id_livreur = ch.id_livreur 
join vehicule v on l.id_vehicule = v.id_vehicule 
join status s on s.id_status = l.id_status 
join entrepot e on l.id_entrepot = e.id_entrepot ;

CREATE OR REPLACE VIEW 


