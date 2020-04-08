<?php
  

    $conexion = mysqli_connect('localhost', 'alex', '123', 'tienda');

    $solicitud = "

    CREATE TABLE productos (
    id_producto INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id_producto),
    nombre VARCHAR(150),
    precio int 
);

CREATE TABLE clientes (
    id_cliente INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id_clientes),
    nombre VARCHAR (100),
    apellido VARCHAR (100),
    edad INT,
    telefono INT
);

CREATE TABLE pedidos (
    id_pedidos INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id_pedidos),
    fecha DATE,
    cantidad INT,
    id_clientes INT,
    id_producto INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes (id_cliente),
    FOREIGN KEY (id_producto) REFERENCES productos (id_producto)
    );

    "



    while ( $uno = mysqli_fetch_array($resultado)) {
    	echo $uno['nombre'] . $uno['apellido'];
    }