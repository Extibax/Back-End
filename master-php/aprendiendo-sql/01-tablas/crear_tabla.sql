/* 
Crear tablas
 */

/* 
int(num de caracteres) ENTERO
integer(num de caracteres) ENTERO (maximo 255)
varchar(num de caracteres) STRING / ALFANUMERICO (maximo 255)
char(num de caracteres) STRING / ALFANUMERICO
float(num de cifras, num deco,añes) DECIMAL / COMA FLOTANTE
date , time, timestamp

//STRINGS MAS GRANDES
TEXT 65535 de caracteres
MEDIUMTEXT 16 millones de caracteres
LONGTEXT 4 billones de caracteres

//ENTEREOS MAS GRANDES
MEDIUMINT
BOGINT
 */

CREATE TABLE usuarios
(
    id INT(11) auto_increment NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(255) default 'Hola que tal',
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

# Eliminar base de datos #
DROP DATABASE usuarios;