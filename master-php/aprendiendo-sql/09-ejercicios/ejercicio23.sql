/* 
23. Listar todos los encargos realizados con la marca del coche
y el nombre del cliente
*/

SELECT ord.Quantity, ca.Brand, cus.Name 
FROM orders ord 
INNER JOIN cars ca ON ca.id = ord.Car_id 
INNER JOIN customers cus ON cus.id = ord.Customer_id;