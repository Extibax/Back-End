# Consulta con una condicion #
SELECT * FROM usuarios WHERE email = 'extibax@gmail.com';

# Ejemplos #

# 1.Mostrar Nombre y Apellidos de todos los usuarios registrados el año 2019 #
SELECT nombre, apellidos FROM usuarios WHERE fecha = 2019;

# 2.Mostrar Nombre y Apellidos de todos los usuarios no registrados el año 2019 o esta vacio el campo #
SELECT nombre, apellidos FROM usuarios WHERE fecha != 2019 OR IS NULL(fecha);

# 3.Mostrar apellidos, email de todos los usuarios que contengan la letra 'a' en sus 
apellidos y que su contraseña sea '1234' #
SELECT apellidos, email FROM usuarios WHERE apellidos LIKE '%a%' AND password=12345678;

# 4.Mostrar todos los registros de la tabla usuarios cuyo año sea par #
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5.Mostrar todos los registros cuyo nombre tenga mas de 5 letras y
que se hayan registrado antes del 2020, y msotrar el nombre en Mayus #