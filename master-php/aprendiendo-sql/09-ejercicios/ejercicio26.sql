/* 
26. Sacar los vendedores que tienen Jefe y sacar el nombre el Jefe
*/

SELECT sel_1.First_name AS 'Vendedor', sel_2.First_name AS 'Jefe' 
FROM sellers sel_1 
INNER JOIN sellers sel_2 ON sel_1.Boss = sel_2.id;