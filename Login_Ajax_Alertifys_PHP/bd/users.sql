CREATE DATABASE login;
USE login;

CREATE TABLE users
(
	ID 					INT AUTO_INCREMENT,
	First_name 			VARCHAR(50),
	Second_name 		VARCHAR(50),
	User				VARCHAR(50),
	Password			VARCHAR(50),
	CONSTRAINT pk_users PRIMARY KEY(ID)
);