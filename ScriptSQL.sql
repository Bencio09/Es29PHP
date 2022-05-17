DROP DATABASE IF EXISTS Museo;
CREATE DATABASE Museo;
USE Museo;

CREATE TABLE artista (
id_artista INT NOT NULL PRIMARY KEY auto_increment,
cognome_artista VARCHAR(25) NOT NULL,
nome_artista VARCHAR(30) NOT NULL,
anno_nascita_artista VARCHAR(4) NOT NULL
);
CREATE TABLE opera (
id_opera INT NOT NULL PRIMARY KEY auto_increment,
nome_opera VARCHAR(35) NOT NULL,
tipo_opera VARCHAR(50) NOT NULL,
id_artista INT NOT NULL REFERENCES artista(id_artista),
image VARCHAR(50) NOT NULL
);

INSERT INTO `opera` (`id_opera`, `nome_opera`, `tipo_opera`, `id_artista`, `image`) VALUES
(1, 'Guernica', 'Pittura', 1, '../Images/guernica.png'),
(2, 'Le Nuvole', 'Pittura', 2, '../Images/lenuvole.png'),
(3, 'Gioconda', 'Pittura', 5, '../Images/guernica.png'),
(4, 'David', 'Scultura', 3, '../Images/david.png'),
(5, 'La Pietà', 'Scultura', 3, '../Images/lapieta.png'),
(6, 'L Annunciazione', 'Pittura', 5, '../Images/annunciazione.png'),
(7, 'Notte Stellata', 'Pittura', 4, '../Images/nottestellata.png'),
(8, 'Sentiero di notte in provenza', 'Pittura', 4, '../Images/sentierodinotteinprovenza.png'),
(9, 'La persistenza della memoria', 'Pittura', 6, '../Images/lapersistenzadellamemoria.png'),
(10, 'Donna Sdraiata', 'Pittura', 6, '../Images/donnasdraiata.png'),
(11, 'Les demoiselles d Avignon', 'Pittura', 1, '../Images/lesdemoiselle.png'),
(12, 'Lo stagno delle ninfee', 'Pittura', 2, '../Images/lostagnodelleninfee.png');

INSERT INTO `artista` (`id_artista`, `cognome_artista`, `nome_artista`, `anno_nascita_artista`) VALUES
(1, 'Picasso', 'Pablo', '1881'),
(2, 'Monet', 'Claude', '1840'),
(3, 'Michelangelo', 'Buonarroti', '1475'),
(4, 'Vincent', 'Van Gogh', '1853'),
(5, 'Leonardo', 'Da Vinci', '1452'),
(6, 'Salvator', 'Dalí', '1904');