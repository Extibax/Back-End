/* 
17. Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia INC'
*/

SELECT cus.Name AS 'Cliente', ord.Quantity AS 'Cantidad de pedidos' 
FROM orders ord 
INNER JOIN customers cus ON cus.id = ord.Customer_id
WHERE cus.Name = 'Fruteria Antonia INC'; 

# OR #

SELECT ord.id AS 'Nº Encargo', ord.Quantity, cus.Name, ca.Model, ord.Date 
FROM orders ord 
INNER JOIN customers cus ON cus.id = ord.Customer_id 
INNER JOIN cars ca ON ca.id = ord.Car_id
WHERE ord.Customer_id IN 
(SELECT id FROM customers WHERE Name = 'Fruteria Antonia INC');