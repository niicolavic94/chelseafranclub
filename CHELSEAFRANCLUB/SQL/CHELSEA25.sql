CREATE DATABASE chelsea_club;
USE chelsea_club;

-- Table Users
CREATE TABLE users (
    id_users INT PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(50) NOT NULL UNIQUE,
	mdp VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE
    
);
/*
-- Table Article
CREATE TABLE article (
    id_article INT PRIMARY KEY AUTO_INCREMENT,
    date_publication DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    titre VARCHAR(100) NOT NULL, 
    contenu TEXT NOT NULL,
    note TINYINT CHECK (note BETWEEN 1 AND 5) 
);

-- Table Commentaire
CREATE TABLE commentaire (
    id_commentaire INT PRIMARY KEY AUTO_INCREMENT,
    date_publication DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    contenu TEXT NOT NULL,
    id_users INT NOT NULL,
    id_article INT NOT NULL,
    FOREIGN KEY (id_users) REFERENCES users(id_users) ON DELETE CASCADE,
    FOREIGN KEY (id_article) REFERENCES article(id_article) ON DELETE CASCADE
);

-- Table Catégorie Article
CREATE TABLE categorie_article (
    id_categorie_article INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL UNIQUE
);

-- Table Association Article - Catégorie
CREATE TABLE article_categorie (
    id_article INT NOT NULL,
    id_categorie_article INT NOT NULL,
    PRIMARY KEY (id_article, id_categorie_article),
    FOREIGN KEY (id_article) REFERENCES article(id_article) ON DELETE CASCADE,
    FOREIGN KEY (id_categorie_article) REFERENCES categorie_article(id_categorie_article) ON DELETE CASCADE
);

-- Table Contact (Formulaire de contact)
CREATE TABLE contact (
    id_contact INT PRIMARY KEY AUTO_INCREMENT,
    date_message DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id_users INT NOT NULL, 
    email VARCHAR(50) NOT NULL,
    titre VARCHAR(100) NOT NULL, 
    contenu TEXT NOT NULL,
    FOREIGN KEY (id_users) REFERENCES users(id_users) ON DELETE CASCADE
);

-- Table Mot de passe oublié
CREATE TABLE mdp_oublie (
    id_mdp_oublie INT PRIMARY KEY AUTO_INCREMENT,
    id_users INT NOT NULL, -- Au lieu de login et email
    token VARCHAR(255) NOT NULL UNIQUE, -- Token sécurisé pour la réinitialisation du mot de passe
    expiration TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP + INTERVAL 1 HOUR),
    FOREIGN KEY (id_users) REFERENCES users(id_users) ON DELETE CASCADE
);

-- Table Suppression Log
CREATE TABLE suppression_log (
    id_suppression INT PRIMARY KEY AUTO_INCREMENT,
    raison TEXT NOT NULL,
    id_users_supprime INT NOT NULL,
    id_users_admin INT NOT NULL,
    date_suppression TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_users_supprime) REFERENCES users(id_users) ON DELETE CASCADE,
    FOREIGN KEY (id_users_admin) REFERENCES users(id_users) ON DELETE CASCADE
);
*/