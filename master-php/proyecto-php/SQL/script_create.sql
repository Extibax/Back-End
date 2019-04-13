CREATE DATABASE IF NOT EXISTS project_php_blog CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE project_php_blog;

CREATE TABLE IF NOT EXISTS users(
    ID              INT(11) AUTO_INCREMENT NOT NULL,
    First_name      VARCHAR(50) NOT NULL,
    Last_name       VARCHAR(50) NOT NULL,
    Email           VARCHAR(50) NOT NULL,
    Password        VARCHAR(255) NOT NULL,
    Date            DATE NOT NULL,
    CONSTRAINT pk_users PRIMARY KEY(ID)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS categories(
    ID      INT(11) AUTO_INCREMENT NOT NULL,
    Name    VARCHAR(100) NOT NULL,
    CONSTRAINT pk_categories PRIMARY KEY(ID)
)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS entries(
    ID              INT(11) AUTO_INCREMENT NOT NULL,
    User_id         INT(11) NOT NULL,
    Category_id     INT(11) NOT NULL,
    Title           VARCHAR(100) NOT NULL,
    Description     VARCHAR(255) NOT NULL,
    Date            DATE,
    CONSTRAINT pk_entries PRIMARY KEY(ID),
    CONSTRAINT fk_users FOREIGN KEY(User_id) REFERENCES users(ID),
    CONSTRAINT fk_categories FOREIGN KEY(Category_id) REFERENCES categories(ID)
)ENGINE=InnoDb;