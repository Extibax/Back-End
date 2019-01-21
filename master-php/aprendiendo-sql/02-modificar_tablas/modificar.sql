# Renomrabr una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar el nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) null;

# Modificar columna si modificar su nombre #
ALTER TABLE usuarios_renom MODIFY apellido CHAR(50) NOT NULL;

# Añadir una nueva columna #
ALTER TABLE usuarios_renom ADD website VARCHAR(100) NULL;

# Añadir restriccion a columna #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# Eliminar una columna #
ALTER TABLE usuarios_renom DROP website;