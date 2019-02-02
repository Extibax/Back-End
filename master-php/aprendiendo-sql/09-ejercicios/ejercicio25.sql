/* 
25. Obtener una lista de los nombre de los clientes con el importe
de sus encargos acumulado
*/

SELECT cus.Name, SUM(ca.Price*ord.Quantity) AS 'Importe total'
FROM customers cus 
INNER JOIN orders ord ON cus.id = ord.Customer_id 
INNER JOIN cars ca ON ord.Car_id = ca.id
GROUP BY cus.Name
ORDER BY 2 ASC;