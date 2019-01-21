# Mostrar la fecha actual #
SELECT fecha, CURDATE() AS 'Fecha Actual' FROM usuarios;

# Mostrar la diferencia entre una fecha y otra #
SELECT DATEDIFF(fecha, CURDATE()) AS 'Diferencia entre fecha y fecha' FROM usuarios;

# Mostrar el nombre del dia #
SELECT DAYNAME(fecha) FROM usuarios;

# Mostrar el dia del mes #
SELECT DAYOFMONTH(fecha) FROM usuarios;

# Mostrar el dia de la semana #
SELECT DAYOFWEEK(fecha) FROM usuarios;

# Mostrar el dia del año #
SELECT DAYOFYEAR(fecha) FROM usuarios;

# Mostrar el mes del año #
SELECT MONTH(fecha) FROM usuarios;

# Mostrar el año #
SELECT YEAR(fecha) FROM usuarios;

# Mostrar la hora #
SELECT HOUR(fecha) FROM usuarios;

# Sacar la hora actual #
SELECT CURTIME() AS 'Hora actual' FROM usuarios

# Mostrar la hora actual del sistema #
SELECT SYSDATE() AS 'Hora actual del sistema operativo' FROM usuarios;

# Formatear una fecha #
SELECT DATE_FORMAT(fecha, '%d-%M-%y') FROM usuarios;

