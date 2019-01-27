# Consultas de agrupamiento #
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

# Consultas de agrupamiento con condiciones #
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

# AVG Sacar la media #
# COUNT Contar el numero de elementos #
# MAX Devuelve el valor maximo del grupo #
# MIN Devuelve el valor minimo del grupo #
# SUM Suma todo el contenido del grupo #

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'Maximo id', titulo FROM entradas;
SELECT MIN(id) AS 'Maximo id', titulo FROM entradas;
SELECT SUM(id) AS 'Suma de ids', titulo FROM entradas;