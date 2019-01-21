# Mostrar usuario de la base de datos #
SELECT DISTINCT USER() FROM usuarios;

# Mostrar nombre la de la base de datos #
SELECT DISTINCT DATABASE() FROM usuarios;

# Si el campo esta vacio entonces llenarlo con texto #
SELECT email, IFNULL(apellidos, 'Este campo esta vacio') FROM usuarios;