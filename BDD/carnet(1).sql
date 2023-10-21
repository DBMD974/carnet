CREATE TABLE `utilisateur` (
	`id_utilisateur` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(200) NOT NULL,
	`prenom` varchar(200) NOT NULL,
	`email` varchar(200) NOT NULL,
	`mdp` varchar(200) NOT NULL,
	`age` int NOT NULL,
	`date_inscription` DATE NOT NULL,
	`id_role` INT NOT NULL,
	PRIMARY KEY (`id_utilisateur`)
);

CREATE TABLE `glycémie` (
	`id_glycemie` INT NOT NULL AUTO_INCREMENT,
	`id_utilisateur` INT NOT NULL,
	`niveau_glycemie` DECIMAL NOT NULL,
	`date_et_heur_de_mesure` DATETIME NOT NULL,
	`commentaire` TEXT NOT NULL,
	PRIMARY KEY (`id_glycemie`)
);

CREATE TABLE `article` (
	`id_article` INT NOT NULL AUTO_INCREMENT,
	`titre` varchar(200) NOT NULL,
	`img` varchar(500) NOT NULL,
	`contenu` varchar(800) NOT NULL,
	`date_publication` DATETIME NOT NULL,
	PRIMARY KEY (`id_article`)
);

CREATE TABLE `role` (
	`id-role` INT NOT NULL AUTO_INCREMENT,
	`type` varchar(200) NOT NULL,
	PRIMARY KEY (`id-role`)
);

CREATE TABLE `contact` (
	`id_contact` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(200) NOT NULL,
	`email` varchar(200) NOT NULL,
	`sujet` varchar(200) NOT NULL,
	`message` mediumtext NOT NULL,
	`id-utilisateur` INT NOT NULL,
	PRIMARY KEY (`id_contact`)
);

ALTER TABLE `utilisateur` ADD CONSTRAINT `utilisateur_fk0` FOREIGN KEY (`id_role`) REFERENCES `role`(`id-role`);

ALTER TABLE `glycémie` ADD CONSTRAINT `glycémie_fk0` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`);

ALTER TABLE `contact` ADD CONSTRAINT `contact_fk0` FOREIGN KEY (`id-utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`);






