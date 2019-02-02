/* 
22. Mostrar listado de clientes mostrando el id y el nombre
Y mostrar tambien el numero de vendedor y su nombre
*/

SELECT cus.id AS 'Cliente ID', cus.Name AS 'Cliente Nombre', 
    sel.id AS 'Vendedor ID', sel.First_name AS 'Vendedor Nombre' 
FROM customers cus, sellers sel WHERE cus.Seller_id = sel.id;