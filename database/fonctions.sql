-- DELIMITER $$

-- CREATE FUNCTION getprix(idcolis INT)
-- RETURNS FLOAT
-- DETERMINISTIC
-- BEGIN
--     DECLARE PRIX FLOAT;
--     SELECT (ca.prixkg * c.poids) INTO PRIX from
--     colis c
--     JOIN chiffredaffaire ca 
--     WHERE c.id_colis = id_colis
--     LIMIT 1;
--     RETURN PRIX;
-- END $$

-- DELIMITER ;
DELIMITER $$

CREATE FUNCTION getchiffredaffaire()
RETURNS FLOAT
DETERMINISTIC
BEGIN
    DECLARE TOTAL FLOAT;
    SELECT sum(ca.prixkg * c.poids) INTO TOTAL from
    colis c
    JOIN chiffredaffaire ca 
    JOIN livraison l on
    l.id_colis = c.id_colis 
    WHERE l.id_status = 2;
    RETURN TOTAL;
END $$

DELIMITER ;

   