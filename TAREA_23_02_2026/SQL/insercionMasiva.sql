/*
El insert into que utilicé cuando aún no estaba decidido el metodo de registro de los alumnos:

USE user1daw_BD1-16;


INSERT INTO alumnos (puesto, nombre) VALUES ('00', 'Manuel Amigo Royán');
INSERT INTO alumnos (puesto, nombre) VALUES ('01', 'Samuel Barril Sosa');
INSERT INTO alumnos (puesto, nombre) VALUES ('02', 'Yehú Blanco Pinillo');
INSERT INTO alumnos (puesto, nombre) VALUES ('13', 'Aitor Gragera Martin');
INSERT INTO alumnos (puesto, nombre) VALUES ('14', 'Ivan Rodríguez Gómez-Landero');
INSERT INTO alumnos (puesto, nombre) VALUES ('15', 'Teresa Hernández Sánchez');
INSERT INTO alumnos (puesto, nombre) VALUES ('20', 'Sara Rivero Caminero');
INSERT INTO alumnos (puesto, nombre) VALUES ('21', 'Carlos Colorado Anselmo');
*/

/* Los datos actuales que estoy usando */

INSERT INTO 'alumnos' ('puesto', 'nombre', 'usuario', 'password', 'nombreWeb', 'nombreJesuita', 'frase', 'foto') VALUES
('01', 'Juan Pérez García', 'juan.perez', '1234', 'juanito', 'San Ignacio de Loyola', 'Para mayor gloria de Dios', 'foto_juan.jpg'),
('02', 'María López Martínez', 'maria.lopez', '1234', 'marilop', 'San Francisco Javier', 'Amar y servir en todo', 'foto_maria.jpg'),
('03', 'Carlos Rodríguez Fernández', 'carlos.rod', '1234', 'carlitos', 'San Pedro Claver', 'La fe sin obras es muerta', 'foto_carlos.jpg'),
('04', 'Ana Sánchez Gómez', 'ana.sanchez', '1234', 'anita', 'San Alberto Hurtado', 'Alegría en el servicio', 'foto_ana.jpg'),
('05', 'David Martín Ruiz', 'david.martin', '1234', 'davicho', 'San Luis Gonzaga', 'Pureza y servicio', 'foto_david.jpg'),
('06', 'Laura Jiménez Díaz', 'laura.jimenez', '1234', 'lauri', 'Santa Teresa de Jesús', 'En todo amar y servir', 'foto_laura.jpg'),
('07', 'Pablo Moreno Torres', 'pablo.moreno', '1234', 'pablito', 'San Juan de Ávila', 'La verdad os hará libres', 'foto_pablo.jpg'),
('08', 'Elena Vázquez Romero', 'elena.vazquez', '1234', 'elenita', 'Santa María Magdalena', 'La misericordia de Dios', 'foto_elena.jpg'),
('09', 'Javier Molina Serrano', 'javier.molina', '1234', 'javichu', 'San Estanislao de Kostka', 'Siempre adelante', 'foto_javier.jpg'),
('10', 'Cristina Navarro Gil', 'cristina.navarro', '1234', 'cris', 'Santa Rosa de Lima', 'Servir con alegría', 'foto_cristina.jpg'),
('11', 'Alejandro Ramírez Flores', 'alejandro.ram', '1234', 'ale', 'San Francisco de Borja', 'Humildad y grandeza', 'foto_alejandro.jpg'),
('12', 'Patricia Díaz Ortega', 'patricia.diaz', '1234', 'patri', 'Santa Clara de Asís', 'Paz y bien', 'foto_patricia.jpg'),
('13', 'Manuel Herrera Vargas', 'manuel.herrera', '1234', 'manu', 'San Roberto Belarmino', 'Defender la fe', 'foto_manuel.jpg'),
('14', 'Isabel Mendoza Castro', 'isabel.mendoza', '1234', 'isabel', 'Santa Juana de Arco', 'Por Dios y por la patria', 'foto_isabel.jpg'),
('15', 'Francisco Ortiz Mora', 'francisco.ortiz', '1234', 'fran', 'San Francisco Javier', 'Id y enseñad', 'foto_francisco.jpg'),
('16', 'Teresa Rubio Núñez', 'teresa.rubio', '1234', 'tere', 'Santa Teresita de Lisieux', 'La confianza y el amor', 'foto_teresa.jpg'),
('17', 'Andrés Delgado Prieto', 'andres.delgado', '1234', 'andres', 'San Andrés Apóstol', 'Venid y veréis', 'foto_andres.jpg'),
('18', 'Carmen Fuentes Silva', 'carmen.fuentes', '1234', 'carmela', 'Nuestra Señora de Guadalupe', '¿No estoy yo aquí que soy tu madre?', 'foto_carmen.jpg'),
('19', 'Raúl Cano Méndez', 'raul.cano', '1234', 'rauli', 'San Ignacio de Antioquía', 'Siempre unidos a Cristo', 'foto_raul.jpg'),
('20', 'Marta Arias Pascual', 'marta.arias', '1234', 'martita', 'Santa Marta', 'Servidora de Cristo', 'foto_marta.jpg');
