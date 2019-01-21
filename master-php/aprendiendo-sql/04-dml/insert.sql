# Insertar nuevos registros #
INSERT INTO usuarios VALUES (null, 'Juan', 'Bedoya', 'extibax@gmail.com', 'sebas20', '19-01-21');
INSERT INTO usuarios VALUES (null, 'Sebastian', 'Piedrahita', 'edgarjusebe@gmail.com', 'sebas20', '19-01-22');
INSERT INTO usuarios VALUES (null, 'Juanse', 'BP', 'jusebepi@gmail.com', 'sebas20', '19-01-23');

# Insertar filas solo con ciertas columnas #
INSERT INTO usuarios(email, password) VALUES ('administracion@gmail.com', 'sebas20');