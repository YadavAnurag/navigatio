CREATE TABLE IF NOT EXISTS users(
	id  INT AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(100) NOT NULL
)ENGINE=INNODB;

insert into users(email, password) values('anu@outlook.com', 'anu');