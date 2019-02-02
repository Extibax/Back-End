/* 
20. Seleccionar el grupo en el que trabaja el vendedor con mayor salario
y mostrar el nombre del grupo
*/

SELECT * FROM groups WHERE id 
IN (SELECT Group_id FROM sellers WHERE Salary = 
    (SELECT MAX(Salary) FROM sellers));

# OR #

SELECT id, Name FROM groups WHERE id 
IN (SELECT Group_id FROM sellers GROUP BY Group_id ORDER BY Salary DESC)
LIMIT 1;