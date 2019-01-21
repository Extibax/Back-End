# Operadores Aritmeticos #
SELECT email, (4+7) FROM usuarios;

# Mostrar el valor absoluto de un numero #
SELECT ABS(7) AS 'Operacion' FROM usuarios;

# Redondeo al alza de un numero decimal #
SELECT CEIL(7.34) AS 'Operacion' FROM usuarios;

# Redondeo a la baja de un numero decimal #
SELECT FLOOR(7.34) AS 'Operacion' FROM usuarios;

# Mostrar el numero pi #
SELECT PI() AS 'Operacion' FROM usuarios;

# Mostrar numeros aleatorios #
SELECT RAND() AS 'Operacion' FROM usuarios;

# Redondeo estableciendo la cantidad de decimales deseados #
SELECT ROUND(7.91, 1) AS 'Operacion' FROM usuarios;

# Sacar la raiz cuadrada de un numero #
SELECT SQRT(7.91) AS 'Operacion' FROM usuarios;

# Truncar un numero quitando la cantidad de decimales deseada #
SELECT TRUNCATE(7.91, 1) AS 'Operacion' FROM usuarios;

# Redonder con una columna #
SELECT ROUND(id, 2) AS 'Operacion' FROM usuarios;