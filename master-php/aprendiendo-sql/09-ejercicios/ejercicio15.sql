/* 
15. Mostrar los clientes que mas pedidos han hecho y mostrar cuantos hicieron
*/

SELECT cli.nombre AS 'Cliente', en.cantidad AS 'Cantidad de Pedidos'
FROM clientes cli
INNER JOIN encargos en ON cli.id = en.cliente_id 
ORDER BY en.cantidad DESC 
LIMIT 3;