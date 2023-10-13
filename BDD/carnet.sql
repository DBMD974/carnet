CREATE TABLE `utilisateur` (
	`id_utilisateur` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(200) NOT NULL,
	`prenom` varchar(200) NOT NULL,
	`email` varchar(200) NOT NULL,
	`mdp` varchar(200) NOT NULL,
	`age` int NOT NULL,
	`date_inscription` DATE NOT NULL,
	PRIMARY KEY (`id_utilisateur`)
);

CREATE TABLE `glycemie` (
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
	`contenu` TEXT NOT NULL,
	`date_publication` DATETIME NOT NULL,
	PRIMARY KEY (`id_article`)
);

ALTER TABLE `glycémie` ADD CONSTRAINT `glycémie_fk0` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur`(`id_utilisateur`);




