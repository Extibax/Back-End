/* 
19. Obtener los vendedores con dos o mas clientes
*/

SELECT * FROM sellers WHERE id 
IN (SELECT Seller_id FROM customers ORDER BY Seller_id)
LIMIT 2;

# OR #

SELECT * FROM sellers WHERE id 
IN (SELECT Seller_id FROM customers GROUP BY Seller_id
    HAVING COUNT(id) >= 2);