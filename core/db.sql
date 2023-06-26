CREATE TABLE `log`(
    `id`int(11) NOT NULL AUTO_INCREMENT,
    `fecha` datetime DEFAULT NULL,
    `descripcion` text COLLATE utf8_spanish2_ci,
    PRIMARY KEY (id)
);

CREATE TABLE usuarios(
    email varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
    nombre varchar(45) COLLATE utf8_spanish2_ci  DEFAULT NULL,
    apellidos varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    password char(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
    telefono varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    direccion varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
    foto mediumblob,
    estado char(32) COLLATE utf8_spanish2_ci DEFAULT NULL,
    rol varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
    PRIMARY KEY (email)
);


CREATE TABLE incidencias(
    id int(11) NOT NULL AUTO_INCREMENT,
    titulo varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    descripcion text COLLATE utf8_spanish2_ci ,
    fecha datetime DEFAULT NULL,
    lugar varchar(45) COLLATE utf8_spanish2_ci  DEFAULT NULL,
    keywords varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    idusuario varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    estado varchar(20) COLLATE utf8_spanish2_ci  DEFAULT NULL,
    PRIMARY KEY (id),
    KEY fk_incidencias_1_idx (idusuario),
    CONSTRAINT fk_incidencias_1 FOREIGN KEY (idusuario) REFERENCES usuarios (email) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE fotos(
    id int(11) NOT NULL AUTO_INCREMENT,
    fotografia mediumblob,
    idincidencia int(11) NOT NULL,
    PRIMARY KEY (id),
    KEY fk_fotos_1_idx (idincidencia),
    CONSTRAINT fk_fotos_1 FOREIGN KEY (idincidencia) REFERENCES incidencias (id)
        ON DELTE CASCADE ON UPDATE CASCADE
);

CREATE TABLE valoraciones(
    id int(11) NOT NULL AUTO_INCREMENT,
    idusuario varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    idincidencia int(11) NOT NULL,
    valoracion tinyint(1) DEFAULT NULL,
    PRIMARY KEY (id),
    KEY fk_valoraciones_1_idx (idusuario),
    KEY fk_valoraciones_2_idx (idincidencia),
    CONSTRAINT fk_valoraciones_1 FOREIGN KEY (idusuario) REFERENCES usuarios(email) ON DELETE CASCADE ON UPDATE CASCADE
    CONSTRAINT fk_valoraciones_2 FOREIGN KEY (idincidencia) REFERENCES 
        incidencias(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE comentarios(
    id int(11) NOT NULL AUTO_INCREMENT,
    idusuario varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
    idincidencia int(11) NOT NULL,
    comentario text COLLATE utf8_spanish2_ci,
    fecha datetime DEFAULT NULL,
    PRIMARY KEY (id),
    KEY fk_comentarios_1_idx (idusuario),
    KEY fk_comentarios_2_idx (idincidencia),
    CONSTRAINT fk_comentarios_1 FOREIGN KEY (idusuario) REFERENCES usuarios(email) ON DELETE CASCADE ON UPDATE CADCADE,
    CONSTRAINT fk_comentarios_2 FOREIGN KEY (idincidencia) REFERENCES incidencias (id) ON DELETE CASCADE ON UPDATE CASCADE
);



