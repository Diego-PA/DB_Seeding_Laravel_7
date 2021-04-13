/*

AUTOR: Diego Puebla Aldama (diego.loge@comunidad.unam.mx)

DROP TABLE prioridad;
DROP TABLE abogado;
DROP TABLE empresa_abogado;
DROP TABLE empresa;
*/

CREATE TABLE prioridad (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL
);

CREATE TABLE abogados (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(250) NOT NULL,
    apellido VARCHAR(250) NOT NULL,
    fecha_registro DATE NOT NULL
);

CREATE TABLE empresas (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(250) NOT NULL,
    descripcion VARCHAR(250) NOT NULL,
    telefono VARCHAR(10) NOT NULL,
    correo VARCHAR(250),
    direccion VARCHAR(250) NOT NULL,
    id_prioridad BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_prioridad) REFERENCES prioridad(id)
);

CREATE TABLE empresa_abogado(
    id_abogado BIGINT UNSIGNED NOT NULL,
    id_empresa BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_abogado) REFERENCES abogados(id),
    FOREIGN KEY (id_empresa) REFERENCES empresas(id)
);

INSERT INTO prioridad (nombre) VALUES ('Alta');
INSERT INTO prioridad (nombre) VALUES ('Media');
INSERT INTO prioridad (nombre) VALUES ('Baja');