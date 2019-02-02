/* 
28. Mostrar todos los vendedores y el numero de clientes.
Se deben mostrar tengan o no clientes
*/

SELECT sel.First_name AS 'Nombre Vendedor', COUNT(cus.id) AS 'Numero Cliente'
FROM sellers sel 
LEFT JOIN customers cus ON sel.id = cus.Seller_id
GROUP BY sel.First_name;