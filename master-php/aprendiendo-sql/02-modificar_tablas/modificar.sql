# Renomrabr una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar el nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) null