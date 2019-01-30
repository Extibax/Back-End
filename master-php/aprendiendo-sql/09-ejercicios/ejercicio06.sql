/* 
6. Visualizar el nombre y los apellidos de los vendedores en una misma columna
 y su fecha de registro y el dia de la semana en el que se registraron
*/

SELECT CONCAT(nombre, ' ', apellidos) AS 'Nombre Y Apellido', 
CONCAT(fecha, ' ', DAYNAME(fecha)) AS 'Fecha y dia de la semana'
FROM vendedores;