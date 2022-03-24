CREATE DATABASE olympic;

USE olympic;

CREATE TABLE games (
  gameid int(11),
  gamename varchar(100) NOT NULL,
  PRIMARY KEY(gameid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE athletes (
  id int(11) AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  country varchar(20) NOT NULL,
  gameid int(11) NOT NULL,
  picture varchar(100) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(gameid) REFERENCES games(gameid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO games VALUES
(1, 'Figure Skating'),
(2, 'Freestyle Skiing'),
(3, 'Speed Skating'),
(4, 'Short Track Speed Skating'),
(5, 'Biathlon'),
(6, 'Skeleton'),
(7, 'Ski Jumping'),
(8, 'Snowboard'),
(9, 'Alpine Skiing'),
(10, 'Cross-Country Skiing'),
(11, 'Bobsleigh'),
(12, 'Nordic Combined'),
(13, 'Ice Hockey'),
(15, 'Luge'),
(16, 'Curling'),
(0, 'No Data');

INSERT INTO athletes (id, name, country, gameid, picture) VALUES
(1, 'Nathan Chen', 'USA', 1, 'Nathan Chen.jpg'),
(2, 'Gabriella Papadakis', 'FRA', 1, 'Gabriella Papadakis.jpg'),
(3, 'Ailing eileen Gu', 'CHN', 2, 'Ailing eileen Gu.jpg'),
(4, 'Suzanne Schulting', 'NED', 3, 'Suzanne Schulting.jpg'),
(5, 'Ziwei Ren', 'CHN', 4, 'Ziwei Ren.jpg'),
(6, 'Dorothea Wierer', 'ITA', 5, 'Dorothea Wierer.jpg'),
(7, 'Mikael Kingsbury', 'CAN', 2, 'Mikael Kingsbury.jpg'),
(8, 'Sungbin Yun', 'KOR', 6, 'Sungbin Yun.jpg'),
(9, 'Kamil Stoch', 'POL', 7, 'Kamil Stoch.jpg'),
(10, 'Shaun White', 'USA', 8, 'Shaun White.jpg'),
(11, 'Chloe Kim', 'USA', 8, 'Chloe Kim.jpg'),
(12, 'Petra Vlhova', 'SVK', 9, 'Petra Vlhova.jpg'),
(13, 'Johannes hoesflot Klaebo', 'NOR', 10, 'Johannes hoesflot Klaebo.jpg'),
(14, 'Charlotte Kalla', 'SWE', 10, 'Charlotte Kalla.jpg'),
(15, 'Francesco Friedrich', 'GER', 11, 'Francesco Friedrich.jpg'),
(16, 'Eric Frenzel', 'GER', 12, 'Eric Frenzel.jpg'),
(17, 'Anna Gasser', 'AUT', 8, 'Anna Gasser.jpg'),
(18, 'Yonathan jesus Fernandez', 'CHI', 10, 'Yonathan jesus Fernandez.jpg'),
(19, 'Marie-philip Poulin', 'CAN', 13, 'Marie-philip Poulin.jpg'),
(20, 'Sven Kramer', 'NED', 3, 'Sven Kramer.jpg'),
(21, 'Julia Taubitz', 'GER', 15, 'Julia Taubitz.jpg'),
(22, 'Shanwayne Stephens', 'JAM', 0, 'Shanwayne Stephens.jpg'),
(23, 'Tahli Gill', 'AUS', 16, 'Tahli Gill.jpg'),
(24, 'Yuzuru Hanyu', 'JPN', 1, 'Yuzuru Hanyu.jpg');



CREATE USER 'test'@'localhost' IDENTIFIED BY 'test';
GRANT ALL PRIVILEGES ON olympic.* TO 'test'@'localhost';