CREATE DATABASE Students;

CREATE TABLE Estudiantes
(
    ID                  INT(11) AUTO_INCREMENT NOT NULL,
    Nombre              VARCHAR(255) NOT NULL,
    Primer_apellido     VARCHAR(255) NOT NULL,
    Segundo_apellido    VARCHAR(255),
    CONSTRAINT pk_estudiantes PRIMARY KEY(ID)
)ENGINE=InnoDb;

CREATE TABLE Colegios
(
    ID              INT(11) AUTO_INCREMENT NOT NULL,
    Nombre          VARCHAR(255) NOT NULL,
    Direccion       VARCHAR(255),
    Telefono        VARCHAR(100) NOT NULL,
    CONSTRAINT pk_colegios PRIMARY KEY(ID)
)ENGINE=InnoDb;

CREATE TABLE Grados
(
    ID          INT(11) AUTO_INCREMENT NOT NULL,
    Cupo        INT(10) NOT NULL,
    Nombre      VARCHAR(100),
    CONSTRAINT pk_grados PRIMARY KEY(ID)
)ENGINE=InnoDb;

CREATE TABLE Matriculas
(
    ID              INT(11) AUTO_INCREMENT NOT NULL,
    Estudiante_id   INT(11) NOT NULL,
    Colegio_id      INT(11) NOT NULL,
    Grado_id        INT(11) NOT NULL,
    CONSTRAINT pk_matriculas PRIMARY KEY(ID),
    CONSTRAINT fk_estudiantes FOREIGN KEY(Estudiante_id) REFERENCES Estudiantes(ID),
    CONSTRAINT fk_colegios FOREIGN KEY(Colegio_id) REFERENCES Colegios(ID),
    CONSTRAINT fk_grados FOREIGN KEY(Grado_id) REFERENCES Grados(ID),
)ENGINE=InnoDb;

CREATE TABLE Grupos
(
    ID          INT(11) AUTO_INCREMENT NOT NULL,
    Grado_id    INT(11) NOT NULL,
    Nombre       VARCHAR(100) NOT NULL,
    CONSTRAINT pk_grupos PRIMARY KEY(ID),
    CONSTRAINT fk_grados FOREIGN KEY(Grado_id) REFERENCES Grados(ID)
)ENGINE=InnoDb;

CREATE TABLE Profesores
(
    ID              INT(11) AUTO_INCREMENT NOT NULL,
    Materia_id      INT(11) NOT NULL,
    Director        VARCHAR(100) NOT NULL,
    CONSTRAINT pk_profesores PRIMARY KEY(ID),
    CONSTRAINT fk_materias PRIMARY KEY(Materia_id) REFERENCES Materias(ID)
)ENGINE=InnoDb;

CREATE TABLE Materias
(
    ID                  INT(11) AUTO_INCREMENT NOT NULL,
    Profesor_id         INT(11) NOT NULL,
    Nombre              VARCHAR(100) NOT NULL,
    CONSTRAINT pk_materias PRIMARY KEY(ID),
    CONSTRAINT fk_profesores FOREIGN KEY(Profesor_id) REFERENCES Profesores(ID);
)ENGINE=InnoDb;

CREATE TABLE Cursos
(
    ID              INT(11) AUTO_INCREMENT NOT NULL,
    Grupo_id        INT(11) NOT NULL,
    Materia_id      INT(11) NOT NULL,
    CONSTRAINT pk_cursos PRIMARY KEY(ID),
    CONSTRAINT fk_grupos FOREIGN KEY(Grupo_id) REFERENCES Grupos(ID),
    CONSTRAINT fk_materias FOREIGN KEY(Materia_id) REFERENCES Materias(ID),
)ENGINE=InnoDb;

CREATE TABLE Periodos
(
    ID          INT(11) AUTO_INCREMENT NOT NULL,
    Fecha       DATE DEFAULT CURDATE() NOT NULL,
    Numero      INT(11) NOT NULL,
    CONSTRAINT pk_periodos PRIMARY KEY(ID)
)ENGINE=InnoDb;

CREATE TABLE Evaluaciones
(
    ID              INT(11) AUTO_INCREMENT NOT NULL,
    Materia_id      INT(11) NOT NULL,
    Periodo_id      INT(11) NOT NULL,
    Nombre          VARCHAR(255) NOT NULL,
    Nota            FLOAT(11) NOT NULL,
    Fecha           DATE DEFAULT CURDATE() NOT NULL,
    Porcentaje      FLOAT(4),
    CONSTRAINT pk_evaluaciones PRIMARY KEY(ID),
    CONSTRAINT fk_materias FOREIGN KEY(Materia_id) REFERENCES Materias(ID),
    CONSTRAINT fk_periodos FOREIGN KEY(Periodo_id) REFERENCES Periodos(ID),
)ENGINE=InnoDb;

CREATE TABLE Competencias
(
    ID                  INT(11) AUTO_INCREMENT NOT NULL,
    Evaluacion_id       INT(11) NOT NULL,
    Descripcion         VARCHAR(255) NOT NULL,
    CONSTRAINT pk_competencias PRIMARY KEY(ID),
    CONSTRAINT fk_evaluaciones FOREIGN KEY(Evaluacion_id) REFERENCES Evaluaciones(ID)
)ENGINE=InnoDb;