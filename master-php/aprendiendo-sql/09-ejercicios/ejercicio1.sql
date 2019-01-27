#
Diseñar y crear la base de datos de un concesionario.
#

CREATE database IF NOT EXISTS concesionario;

USE concesionario;

CREATE TABLE coches 
(
    id          INT(10) auto_increment NOT NULL,
    modelo      VARCHAR(100) NOT NULL,
    marca       VARCHAR(50),
    precio      INT(20) NOT NULL,
    stock       INT(255) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE grupos
(
    id          INT(10) auto_increment NOT NULL,
    nombre      VARCHAR(100) NOT NULL,
    ciudad      VARCHAR(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE vendedores
(
    id          INT(10) auto_increment NOT NULL,
    grupo_id    INT(10) NOT NULL,
    jefe     INT(10),
    nombre      VARCHAR(100) NOT NULL,
    apellidos   VARCHAR(150),
    cargo       VARCHAR(50),
    fecha       DATE NOT NULL,
    sueldo      FLOAT(20,2),
    comision    FLOAT(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedores_grupos FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedores_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDb;

CREATE TABLE clientes
(
    id          INT(10) auto_increment NOT NULL,
    vendedor_id INT(10),
    nombre      VARCHAR(255) NOT NULL,
    ciudad      VARCHAR(100),
    gastado     FLOAT(50,2),
    fecha       DATE,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_clientes_vendedores FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDb;

CREATE TABLE encargos
(
    id          INT(10) auto_increment NOT NULL,
    cliente_id  INT(10) NOT NULL,
    coche_id    INT(10) NOT NULL,
    cantidad    INT(100),
    fecha       DATE,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargos_clientes FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargos_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDb;

# Rellenar la base de datos con informacion (INSERT) #

# COCHES
INSERT INTO coches VALUES(NULL, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(NULL, 'Seta Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES(NULL, 'Mercedes Ranchera', 'Mercedes', 32000, 24);
INSERT INTO coches VALUES(NULL, 'Porche Cayene', 'Renault', 65000, 5);
INSERT INTO coches VALUES(NULL, 'Lambo Aventador', 'Lamborgini', 170000, 2);
INSERT INTO coches VALUES(NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);

# GRUPOS

# VENDEDORES

# CLIENTES

# ENCARGOS