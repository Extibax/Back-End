# Mostrar los textos en Mayuscula #
SELECT UPPER(nombre) FROM usuarios;

# Mostrar los textos en Minusculas #
SELECT LOWER(nombre) FROM usuarios;

# Concatenar texto#
SELECT CONCAT(nombre, ' ', apellidos) AS 'Conversion' FROM usuarios;

# Doble funcion #
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Conversion' FROM usuarios;

# Sacar la longitud de caracteres de una cadena de texto #
SELECT LENGTH(nombre) AS 'Conversion' FROM usuarios;

# Limpiar los espacios vacios #
SELECT TRIM(CONCAT('    ', nombre, '    ', apellidos, '    ')) AS 'Conversion' FROM usuarios;