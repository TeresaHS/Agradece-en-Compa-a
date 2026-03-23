CREATE TABLE alumnos (
	puesto CHAR(2) NOT NULL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL;
	usuario VARCHAR(30) NULL,
	pw VARCHAR(255) NULL,
	nombreWeb VARCHAR(30) NULL,
	nombreJesuita VARCHAR(80) NULL,
	frase VARCHAR(150) NULL,
	foto VARCHAR(30) NULL,
)
;

/* Aun a espera de ver como dejar los campos dependiendo del proceso de insercion inicial */


CREATE TABLE agradecimientos (
    idAgradecimiento SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	mensaje VARCHAR(250) NOT NULL,
	idEmisor CHAR(2) NOT NULL,
	idReceptor CHAR(2) NOT NULL,

	UNIQUE INDEX RepeticionMensajes (idEmisor, idReceptor),
	INDEX Receptor (idReceptor),
	CONSTRAINT Emisor FOREIGN KEY (idEmisor) REFERENCES alumnos (puesto),
	CONSTRAINT Receptor FOREIGN KEY (idReceptor) REFERENCES alumnos (puesto),
	CONSTRAINT chk_emisor_receptor CHECK ((idReceptor <> idEmisor))
)
;
