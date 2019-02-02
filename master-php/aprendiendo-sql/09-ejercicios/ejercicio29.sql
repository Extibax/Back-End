/* 
29. Crear una vista llamada vendedores A que incluira todos los
vendedores del grupo que se llamen vendedor A
*/

CREATE VIEW Vendedores_A AS
SELECT * FROM sellers
WHERE Group_id 
IN (SELECT id FROM groups WHERE Name = 'Vendedores A');