CREATE DATABASE OutSound CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE OutSound;
CREATE TABLE Capteur(
RefCapteur INT AUTO_INCREMENT PRIMARY KEY,
PuissanceSon FLOAT,
ConsoEnergie FLOAT,
Utilisation DATETIME);

CREATE TABLE Metro(
NumLigne INT,
StationDepart VARCHAR(50),
StationArrivee VARCHAR(50));

CREATE TABLE Utilisateur(
IdClient INT AUTO_INCREMENT PRIMARY KEY,
Nom VARCHAR(50),
Prenom VARCHAR(50),
AdresseMail VARCHAR(50));

CREATE TABLE formulaire (
IdQuestion int AUTO_INCREMENT PRIMARY KEY,
question varchar(500),
mail_user varchar(500)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
