/* 
2. Modifiar la comision de los vendedores y ponerlas al 2% cuando gane
50.000 o mas
*/

UPDATE vendedores SET comision = 0.5 WHERE sueldo >= 50000;