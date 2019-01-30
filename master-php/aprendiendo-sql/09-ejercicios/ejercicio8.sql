/* 
8. Visualizar todos los coches en cuya marca exista la letra "A" y cuyo 
modelo empieze por "F"
*/

SELECT * FROM coches WHERE upper(marca) LIKE upper('F%') AND upper(marca) LIKE upper('%A%');