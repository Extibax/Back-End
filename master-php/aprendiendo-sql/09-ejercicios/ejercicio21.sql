/* 
21. Obtener los nombres y ciudades de los clientes con encargos y sea
mayor o igual a tres unidades
*/

SELECT Name, City FROM customers WHERE id 
IN (SELECT Customer_id FROM orders WHERE Quantity >= 3);