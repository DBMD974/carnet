CREATE TABLE `utilisateurs` (
	`id_utilisateur` INT NOT NULL AUTO_INCREMENT,
	`nom` VARCHAR(200) NOT NULL,
	`prenom` VARCHAR(200) NOT NULL,
	`email` VARCHAR(200) NOT NULL,
	`mdp` VARCHAR(200) NOT NULL,
	`age` INT NOT NULL,
	`date_inscription` DATE NOT NULL,
	PRIMARY KEY (`id_utilisateur`)
);

CREATE TABLE `glycemia` (
	`id_glycemie` INT NOT NULL AUTO_INCREMENT,
	`id_utilisateur` INT NOT NULL,
	`niveau_glycemie` DECIMAL(10, 2) NOT NULL,
	`date_et_heure_de_mesure` DATETIME NOT NULL,
	`commentaire` TEXT NOT NULL,
	PRIMARY KEY (`id_glycemie`),
	FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs`(`id_utilisateur`)
);

CREATE TABLE `articles` (
	`id_article` INT NOT NULL AUTO_INCREMENT,
	`titre` VARCHAR(200) NOT NULL,
	`img` VARCHAR(500) NOT NULL,
	`contenu` TEXT NOT NULL,
	`date_publication` DATETIME NOT NULL,
	PRIMARY KEY (`id_article`)
);




