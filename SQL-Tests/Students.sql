CREATE DATABASE Estudiantes CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE Estudiantes;

CREATE TABLE Estudiante
(
    cod_Est             INT(11) AUTO_INCREMENT NOT NULL,
    nombre_Est          VARCHAR(255) NOT NULL,
    primer_Ape_Est      VARCHAR(255) NOT NULL,
    segundo_Ape_Est     VARCHAR(255),
    CONSTRAINT pk_estudiante PRIMARY KEY(cod_Est)
);

CREATE TABLE Colegio
(
    nit_Col                 INT(11) AUTO_INCREMENT NOT NULL,
    nombre_Col              VARCHAR(255) NOT NULL,
    direccion_Col           VARCHAR(255),
    telefono_col            VARCHAR(100) NOT NULL,
    CONSTRAINT pk_colegio PRIMARY KEY(nit_Col)
);

CREATE TABLE Grado
(
    cod_Gra             INT(11) AUTO_INCREMENT NOT NULL,
    cupo_Gra            INT(10) NOT NULL,
    nombre_Gra          VARCHAR(100),
    CONSTRAINT pk_grado PRIMARY KEY(cod_Gra)
);

CREATE TABLE Matricula
(
    cod_Mat             INT(11) AUTO_INCREMENT NOT NULL,
    codigo_Est          INT(11) NOT NULL,
    codigo_Col          INT(11) NOT NULL,
    codigo_Gra          INT(11) NOT NULL,
    CONSTRAINT pk_matricula PRIMARY KEY(cod_Mat),
    CONSTRAINT fk_estudiante FOREIGN KEY(codigo_Est) REFERENCES Estudiante(cod_Est),
    CONSTRAINT fk_colegio FOREIGN KEY(codigo_Col) REFERENCES Colegio(nit_Col),
    CONSTRAINT fk_grado FOREIGN KEY(codigo_Gra) REFERENCES Grado(cod_Gra)
);

CREATE TABLE Grupo
(
    cod_Gru             INT(11) AUTO_INCREMENT NOT NULL,
    codigo_Gra          INT(11) NOT NULL,
    nombre_Grup         VARCHAR(100) NOT NULL,
    CONSTRAINT pk_grupo PRIMARY KEY(cod_Gru),
    CONSTRAINT fk_grado FOREIGN KEY(codigo_Gra) REFERENCES Grado(cod_Gra)
);

CREATE TABLE Profesor
(
    cod_Pro                 INT(11) AUTO_INCREMENT NOT NULL,
    codigo_Mat              INT(11) NOT NULL,
    cod_Dir                 VARCHAR(100) NOT NULL,
    CONSTRAINT pk_profesor PRIMARY KEY(cod_Pro),
    CONSTRAINT fk_materia FOREIGN KEY(codigo_Mat) REFERENCES Materia(cod_Mat)
);

CREATE TABLE Materia
(
    cod_Mat                     INT(11) AUTO_INCREMENT NOT NULL,
    codigo_Pro                  INT(11) NOT NULL,
    nombre_Mat                  VARCHAR(100) NOT NULL,
    CONSTRAINT pk_materia PRIMARY KEY(cod_Mat),
    CONSTRAINT fk_profesor FOREIGN KEY(codigo_Pro) REFERENCES Profesor(cod_Pro)
);

CREATE TABLE Curso
(
    codigo_Cur                  INT(11) AUTO_INCREMENT NOT NULL,
    codigo_Gru                  INT(11) NOT NULL,
    codigo_Mat                  INT(11) NOT NULL,
    CONSTRAINT pk_curso PRIMARY KEY(codigo_Cur),
    CONSTRAINT fk_grupo FOREIGN KEY(codigo_Gru) REFERENCES Grupo(cod_Gru),
    CONSTRAINT fk_materia FOREIGN KEY(codigo_Mat) REFERENCES Materia(cod_Mat)
);

CREATE TABLE Periodo
(
    cod_Pr              INT(11) AUTO_INCREMENT NOT NULL,
    fecha_Per           DATE NOT NULL,
    numero_Pr           INT(11) NOT NULL,
    CONSTRAINT pk_periodo PRIMARY KEY(cod_Pr)
);

CREATE TABLE Evaluacion
(
    cod_Ev              INT(11) AUTO_INCREMENT NOT NULL,
    codigo_Mat          INT(11) NOT NULL,
    codigo_Pr           INT(11) NOT NULL,
    nombre_Ev              VARCHAR(255) NOT NULL,
    nota_Ev                FLOAT(11) NOT NULL,
    fecha_Ev               DATE NOT NULL,
    procentaje_Ev          FLOAT(4),
    CONSTRAINT pk_evaluacion PRIMARY KEY(cod_Ev),
    CONSTRAINT fk_materia FOREIGN KEY(codigo_Mat) REFERENCES Materia(cod_Mat),
    CONSTRAINT fk_periodo FOREIGN KEY(codigo_Pr) REFERENCES Periodo(cod_Pr)
);

CREATE TABLE Competencia
(
    cod_Com                     INT(11) AUTO_INCREMENT NOT NULL,
    codigo_Ev                   INT(11) NOT NULL,
    descripcion_Com             VARCHAR(255) NOT NULL,
    CONSTRAINT pk_competencia PRIMARY KEY(cod_Com),
    CONSTRAINT fk_evaluacione FOREIGN KEY(codigo_Ev) REFERENCES Evaluacion(cod_Ev)
);

SELECT E.cod_Est, E.primer_Ape_Est, E.segundo_Ape_Est, E.nombre_Est
FROM Estudiante E, Matricula M, Grado G
WHERE M.codigo_Est=E.cod_Est 
AND M.codigo_Gra=G.cod_Gra 
AND G.nombre_Gra='Septimo';