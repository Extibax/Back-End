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