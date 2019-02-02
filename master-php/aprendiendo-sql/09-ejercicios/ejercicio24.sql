/* 
24. Listar los encargos con el nombre del coche, el nombre del cliente
y el nombre de la ciudad del cliente pero unicamente cuando sea de Madrid
*/

SELECT ord.Quantity, ca.Model, cus.Name, cus.City 
FROM orders ord
INNER JOIN cars ca ON ord.Car_id = ca.id 
INNER JOIN customers cus ON ord.Customer_id = cus.id 
WHERE cus.City = 'Madrid';