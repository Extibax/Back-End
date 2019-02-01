/* 
16. Obtener listado de clientes atendidos por el vendedor 'David Lopez'
*/

SELECT * FROM customers WHERE Seller_id IN 
(SELECT id FROM Sellers WHERE First_name = 'David' AND Second_name = 'Lopez');