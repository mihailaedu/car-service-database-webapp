#source C:/Users/edymi/OneDrive/Desktop/script15.sql;  
/*          Folositi pentru cale simbolul "/", NU "\"         */ 


/*#############################################################*/
/*        PARTEA 1 - STERGEREA SI RECREAREA BAZEI DE DATE      */

DROP DATABASE ServiceAuto;
CREATE DATABASE ServiceAuto;
USE ServiceAuto;


/*#############################################################*/




/*#############################################################*/
/*                  PARTEA 2 - CREAREA TABELELOR              */

CREATE TABLE tblProprietar (
  ID_Proprietar INT PRIMARY KEY AUTO_INCREMENT,
  Nume VARCHAR(50) NOT NULL,
  Prenume VARCHAR(50) NOT NULL,
  Email VARCHAR(100) NOT NULL,
  Telefon VARCHAR(15) NOT NULL,
  Parola VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE tblMasina (
  ID_Masina INT PRIMARY KEY AUTO_INCREMENT,
  NrInmatriculare VARCHAR(20) UNIQUE,
  Marca VARCHAR(30),
  Model VARCHAR(30),
  AnFabricatie INT,
  ProprietarID INT,
  FOREIGN KEY (ProprietarID) REFERENCES tblProprietar(ID_Proprietar) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE tblMecanic (
  ID_Mecanic INT PRIMARY KEY AUTO_INCREMENT,
  Nume VARCHAR(50),
  Specializare VARCHAR(100),
  AnExperienta INT
) ENGINE=InnoDB;

CREATE TABLE tblReparatie (
  ID_Reparatie INT PRIMARY KEY AUTO_INCREMENT,
  DataStart DATE,
  DataFinal DATE,
  Cost DECIMAL(10,2),
  Descriere TEXT,
  ID_Masina INT,
  FOREIGN KEY (ID_Masina) REFERENCES tblMasina(ID_Masina) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

CREATE TABLE tblReparatie_Mecanic (
  ID_Reparatie INT,
  ID_Mecanic INT,
  PRIMARY KEY (ID_Reparatie, ID_Mecanic),
  FOREIGN KEY (ID_Reparatie) REFERENCES tblReparatie(ID_Reparatie)ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (ID_Mecanic) REFERENCES tblMecanic(ID_Mecanic)ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;


/*#############################################################*/




/*#############################################################*/
/*         PARTEA 3 - INSERAREA INREGISTRARILOR IN TABELE      */

INSERT INTO tblProprietar (Nume, Prenume, Email, Telefon, Parola) VALUES
('Popescu', 'Andrei', 'andrei.popescu@email.com', '0721123456','$2y$10$B7F0gMoDbw9D8lZ9c3bWauTxfDdJ5EcWBNB5smBHHpO7E0WWrc5uS'),
('Ionescu', 'Maria', 'maria.ionescu@email.com', '0744123123','$2y$10$TwHTddfl/UwI3VVtSgcLKuWzFe9oeZ8E.JvVPIMpcn2cqIu9xCq9C'),
('Georgescu', 'Radu', 'radu.geo@email.com', '0733344556','$2y$10$VhYPw4Sr0MttC9IXTBN9H.Wl4hVzrjvObXDY6pRA9oA2GyJTkll2C'),
('Vasilescu', 'Ana', 'ana.v@email.com', '0721333222','$2y$10$9ToBCVMIWjBbR60Yc5vZoONRmknGubEz/OYO7TcGqG86E6oVrj6zm'),
('Iliescu', 'Daria', 'daria.i@email.com', '0711111111','$2y$10$KZ/nEkZijLOfiPxiFFmEKeF4yzZxJja0c2Hzd9EyTCnEwZj37YqGe'),
('Marin', 'Ioan', 'ioan.marin@email.com', '0765987678','$2y$10$ER7cLsjzkh9SzyZPjOfJgeQ6eXBAXpJh3XhHbUyfP3gFvmn5ANzGq'),
('Toma', 'Sorin', 'sorin.toma@email.com', '0733000000','$2y$10$LYvv6QZq63n3dGWrGUp5BOerWQqJpjXYGk1bCnHDsSlxWoWBjexQW'),
('Radu', 'Lavinia', 'lavinia.r@email.com', '0722445566','$2y$10$3HnMDQoyHyQXVr77Zcsz7uU9STwHJSgNmUyslZLx39B4GJ/qT2a5e'),
('Petrescu', 'Mihai', 'mihai.p@email.com', '0766777888','$2y$10$GpGdrPB/Vo0CLdrGYBFPO.J9tcUnTjDaAnRuTWXU.vuZBppV2O0k2'),
('Costache', 'Elena', 'elena.c@email.com', '0712543675','$2y$10$TZBTvX5D7z1H3Dx.LJeSp.GKHOr4B2ZzKDZVphGHw5htVkeFqPuvG');



INSERT INTO tblMasina (NrInmatriculare, Marca, Model, AnFabricatie, ProprietarID) VALUES
('B821CTS', 'Dacia', 'Logan', 2010, 1),
('CJ88TNT', 'Ford', 'Focus', 2015, 2),
('DB30EDW', 'BMW', '340i', 2018, 3),
('B777GHI', 'Toyota', 'Corolla', 2020, 4),
('PH55TYU', 'Audi', 'A4', 2017, 5),
('VL10DUM', 'Volkswagen', 'Golf', 2011, 6),
('B456DEF', 'Hyundai', 'i30', 2019, 1),
('OL69OBM', 'Mercedes', 'C220', 2016, 7),
('SV21JKL', 'Skoda', 'Octavia', 2022, 8),
('AR12ZXC', 'Renault', 'Megane', 2013, 9);


INSERT INTO tblMecanic (Nume, Specializare, AnExperienta) VALUES
('Istrate George', 'Motor', 10),
('Vlad Nicolae', 'Electrică', 5),
('Stan Florin', 'Caroserie', 7),
('Dumitrescu Paul', 'Frâne și suspensii', 12),
('Enache Alina', 'Diagnoză', 6),
('Marcu Mihai', 'Transmisie', 9),
('Cristea Raluca', 'Pneumatice', 4),
('Zaharia Andrei', 'Sistem răcire', 3),
('Tudorache Simona', 'Direcție', 8),
('Negoiță Costin', 'Sisteme hibride', 2);


INSERT INTO tblReparatie (DataStart, DataFinal, Cost, Descriere, ID_Masina) VALUES
('2024-01-10', '2024-01-12', 1200.50, 'Schimb distribuție și ulei', 1),
('2024-02-01', '2024-02-03', 890.00, 'Reparație frâne față', 2),
('2024-03-05', '2024-03-07', 500.00, 'Schimb ambreiaj', 3),
('2024-03-15', '2024-03-15', 100.00, 'Schimb baterie', 4),
('2024-03-20', '2024-03-22', 1550.00, 'Reparație sistem răcire', 5),
('2024-04-01', '2024-04-03', 300.00, 'Verificare generală + ITP', 6),
('2024-04-04', '2024-04-06', 700.00, 'Schimb discuri și plăcuțe frână', 7),
('2024-04-07', '2024-04-10', 2300.00, 'Înlocuire cutie viteze', 8),
('2024-04-11', NULL, 0.00, 'În desfășurare: Probleme electrice', 9),
('2024-04-12', '2024-04-13', 450.00, 'Schimb kit distribuție', 10);


INSERT INTO tblReparatie_Mecanic (ID_Reparatie, ID_Mecanic) VALUES
(1, 1), (1, 2),
(2, 4),
(3, 1), (3, 6),
(4, 2),
(5, 8),
(6, 5), (6, 3),
(7, 4), (7, 1),
(8, 6), (8, 1), (8, 2),
(9, 2), (9, 10),
(10, 1);


/*#############################################################*/



/*#############################################################*/
/*  PARTEA 4 - VIZUALIZAREA STUCTURII BD SI A INREGISTRARILOR  */
DESCRIBE tblProprietar;
DESCRIBE tblMasina;
DESCRIBE tblMecanic;
DESCRIBE tblReparatie;
DESCRIBE tblReparatie_Mecanic;

SELECT * FROM tblProprietar;
SELECT * FROM tblMasina;
SELECT * FROM tblMecanic;
SELECT * FROM tblReparatie;
SELECT * FROM tblReparatie_Mecanic;

/*#############################################################*/




/* 
- Nu stergeti comentariile de mai sus

- REDENUMITI FISIERUL  scriptXX.sql astfel incat XX sa coincida cu numarul echipei de BD. Ex: script07.sql

- SCRIPTUL AR TREBUI SA POATA FI RULAT FARA NICI O EROARE!

- ATENTIE LA CHEILE STRAINE! Nu uitati sa modificati motorul de stocare pentru tabele, la InnoDB, pentru a functiona constrangerile de cheie straina (vezi laborator 1, pagina 16 - Observatie)

*/