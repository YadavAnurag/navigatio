CREATE TABLE IF NOT EXISTS users(
	id  INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(100) NOT NULL
)ENGINE=INNODB;

insert into users(username, password) 
	values
	('anu', 'anu'),
	('tanu', 'tanu');