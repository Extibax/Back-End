/* 
11. Visualizar todos los cargos y el numero de vendedores que hay en cada cargo
*/

SELECT cargo, COUNT(id) AS cantidad FROM vendedores GROUP BY cargo;