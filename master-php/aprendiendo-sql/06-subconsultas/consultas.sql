# 
*Subconsultas: Son consultas que se ejecutan dentro de otras, consiste en utilizar
los resultados de la subconsulta para operar en la consulta principal.
*Jugando con las clabes ajenas / foraneas.
#

# Mostrar registros que su id este dentro de la tabla entradas #
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas);

# Mostrar registros que su id no esten dentro de la tabla entradas #
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas);

# Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA V #
SELECT nombre, apellidos FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

# Sacar todas las entradas de la categoria accion utilizando su nombre #
SELECT categoria_id, titulo FROM entradas WHERE categoria_id
    IN (SELECT id FROM categorias WHERE nombre = 'Accion');

# Mostrar las categorias con mas de 3 entradas #
SELECT nombre FROM categorias WHERE 
    id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);

# Mostrar los usuarios que crearon una entrada un martes #
SELECT * FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 3);

# Mostrar el nombre del usuario que tenga mas entradas #
SELECT nombre FROM usuarios WHERE id 
    = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# Mostrar las categorias sin entradas #
SELECT * FROM categorias WHERE id 
    NOT IN (SELECT categoria_id FROM entradas);