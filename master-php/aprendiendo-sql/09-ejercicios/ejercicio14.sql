/* 
14. Visualizar las unidades totales vendidas de cada coche a cada cliente
mostrando el nombre del producto, el numero del cliente y la suma de unidades
*/

SELECT cli.id, cli.nombre, en.cantidad
FROM clientes cli INNER JOIN encargos en ON en.cliente_id = cli.id;

SELECT 
co.modelo AS 'Modelo Coche', cli.id AS 'ID Cliente', 
cli.nombre AS 'Nombre Cliente', SUM(en.cantidad) AS 'Cantidad de Encargos'
FROM encargos en 
INNER JOIN clientes cli ON en.cliente_id = cli.id 
INNER JOIN coches co ON en.coche_id = co.id 
GROUP BY en.coche_id, en.cliente_id;