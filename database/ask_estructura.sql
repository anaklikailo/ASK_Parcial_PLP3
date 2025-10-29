CREATE DATABASE ask_parcial_plp3 IF NOT EXISTS ;
USE ask_parcial_plp3;

CREATE TABLE ask_preguntas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta TEXT NOT NULL,
    respuesta1 TEXT NOT NULL,
    respuesta2 TEXT NOT NULL,
    respuesta3 TEXT NOT NULL,
    respuesta_correcta TINYINT(1) NOT NULL
);

CREATE TABLE ask_puntajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    puntaje INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

