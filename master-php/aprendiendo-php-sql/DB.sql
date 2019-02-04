CREATE DATABASE blog;

CREATE TABLE users
(
    id INT NOT NULL AUTO_INCREMENT,
    First_name VARCHAR(255),
    Second_name VARCHAR(255),
    Email VARCHAR(255),
    Password VARCHAR(255),
    Date DATE,
    CONSTRAINT pk_users PRIMARY KEY(id)
);

CREATE TABLE categories
(
    id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(255),
    CONSTRAINT pk_categories PRIMARY KEY(id)
);

CREATE TABLE inputs
(
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    category_id INT NOT NULL,
    Title VARCHAR(255),
    Description MEDIUMTEXT,
    Date DATE,
    CONSTRAINT pk_inputs PRIMARY KEY(id),
    CONSTRAINT fk_inputs_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_inputs_categories FOREIGN KEY(category_id) REFERENCES categories(id)
);