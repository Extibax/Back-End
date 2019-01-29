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
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Directores Mecanicos', 'Madrid');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES(NULL, 'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES(NULL, 'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES(NULL, 'Vendedores C', 'Santiago de compostela');

# VENDEDORES
INSERT INTO vendedores VALUES(NULL, 1, NULL, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(NULL, 1, 1, 'Fran', 'Martinez', 'Ayudante en tienda', CURDATE(), 23000, 2);
INSERT INTO vendedores VALUES(NULL, 2, NULL, 'Nelson', 'Sanchez', 'Responsable de tienda', CURDATE(), 12000, 6);
INSERT INTO vendedores VALUES(NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante en tienda', CURDATE(), 12000, 6);
INSERT INTO vendedores VALUES(NULL, 3, NULL, 'Victor', 'Lopez', 'Mecanico jefe', CURDATE(), 50000, 2);
INSERT INTO vendedores VALUES(NULL, 4, NULL, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 130000, 8);
INSERT INTO vendedores VALUES(NULL, 5, NULL, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 60000, 2);
INSERT INTO vendedores VALUES(NULL, 6, NULL, 'David', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1);
INSERT INTO vendedores VALUES(NULL, 6, 8, 'Luis', 'Lopez', 'Ayudante en tienda', CURDATE(), 10000, 10);

# CLIENTES
INSERT INTO clientes VALUES(NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Fruteria Antonia INC', 'Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Imprenta Martinez', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Jesus Colchones INC', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES(NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());


# ENCARGOS
INSERT INTO encargos VALUES(NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES(NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES(NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES(NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES(NULL, 6, 6, 1, CURDATE());

# Alteraciones y Consultas extras, llevadas a cabo por mi #

# Quitando la conexion de las clabes Foraneas para poder truncar la tabla vendedores #
ALTER TABLE vendedores DROP FOREIGN KEY fk_vendedores_grupos;
ALTER TABLE vendedores DROP FOREIGN KEY fk_vendedores_jefe;
ALTER TABLE clientes DROP FOREIGN KEY fk_clientes_vendedores;

# Regresando la conexion de las claves Foraneas despues de haber truncado la tabla vendedores #
ALTER TABLE vendedores ADD FOREIGN KEY fk_vendedores_grupos(grupo_id) REFERENCES grupos(id);
ALTER TABLE vendedores ADD FOREIGN KEY fk_vendedores_jefe(jefe) REFERENCES vendedores(id);
ALTER TABLE clientes ADD FOREIGN KEY fk_clientes_vendedores(vendedor_id) REFERENCES vendedores(id);

# Consulta multitabla #
SELECT cantidad, nombre, modelo FROM encargos, clientes, coches 
WHERE encargos.cliente_id = clientes.id AND encargos.coche_id = coches.id;