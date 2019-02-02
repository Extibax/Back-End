/* 
27. Visualizar los nombres de los clientes y la cantidad de encargos 
realizados incluyendo los que no hayan realizado encargos
*/

SELECT cus.Name, COUNT(ord.id) 
FROM customers cus 
LEFT JOIN orders ord ON cus.id = ord.Customer_id 
GROUP BY 1;