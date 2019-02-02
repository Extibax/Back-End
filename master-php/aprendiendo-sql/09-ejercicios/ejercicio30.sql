/* 
30. Mostrar los datos del vendedor con mas antiguedad en el concesionario
*/

SELECT * FROM sellers ORDER BY Date ASC LIMIT 1;

/* 
30 Plus. Obtener los coches con mas unidades vendidas.
*/

SELECT * FROM cars WHERE id 
IN (SELECT Car_id FROM orders ORDER BY Quantity DESC)
LIMIT 3;