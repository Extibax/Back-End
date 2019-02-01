/* 
17. Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia INC'
*/

SELECT c.Name AS 'Cliente', o.Quantity AS 'Cantidad de pedidos' 
FROM orders o 
INNER JOIN customers c ON c.id = o.Customer_id
WHERE c.Name = 'Fruteria Antonia INC';