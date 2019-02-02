/* 
18. Listar los clientes que han hecho algun encargo del coche:
"Mercedes Ranchera"
*/

SELECT * 
FROM customers WHERE id 
IN 
(
    SELECT Customer_id FROM orders WHERE Car_id 
    IN  
    (
        SELECT id FROM cars WHERE Model = 'Mercedes Ranchera'
    )
);

# OR #

SELECT cus.Name, ca.Model
FROM customers cus 
INNER JOIN orders ord ON ord.Customer_id = cus.id
INNER JOIN cars ca ON ca.id = ord.Car_id
WHERE cus.id = ord.Customer_id AND ord.Car_id = 
(SELECT id FROM cars WHERE Model = 'Mercedes Ranchera');