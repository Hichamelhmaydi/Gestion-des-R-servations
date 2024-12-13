CREATE DATABASE gym;
USE gym ;
CREATE TABLE activite (
    ID_activite INT AUTO_INCREMENT PRIMARY KEY ,  
    nom_activite VARCHAR(100) NOT NULL,                  
    descr TEXT,                            
    date_debut DATE NOT NULL,                   
    date_fin DATE NOT NULL,                         
    disponibilite TINYINT NOT NULL,                 
    capacite INT  NOT NULL                                
);

ALTER Table activite
ADD COLUMN disponibilite TINYINT;


ALTER TABLE reservations MODIFY ID_membres INT ;
ALTER TABLE reservations MODIFY ID_activite INT ;
ALTER TABLE reservations DROP date_reservation ;
ALTER TABLE reservations DROP statu ;

CREATE TABLE membres (
    ID_membres INT AUTO_INCREMENT PRIMARY KEY,  
    nom VARCHAR(50) NOT NULL,                  
    prenom VARCHAR(50) NOT NULL,                            
    email VARCHAR(100) NOT NULL,                   
    telephone VARCHAR(15) NOT NULL                                                      
);


CREATE TABLE reservations (
    ID_reservations INT AUTO_INCREMENT PRIMARY KEY,
    ID_activite INT NOT NULL,
    ID_membres INT NOT NULL,
    date_reservation DATETIME NOT NULL,
    statu ENUM('Confirmé', 'Annulée') NOT NULL,
    FOREIGN KEY (ID_activite) REFERENCES activite(ID_activite),
    FOREIGN KEY (ID_membres) REFERENCES membres(ID_membres)
);
