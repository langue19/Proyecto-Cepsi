<?php



include 'conexion.php';

include 'crearBD.php';



try {

  // Crear una conexión a MySQL

  $conn = new PDO("$driver:host=$host", $usuario, $passw);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



  // Seleccionar la base de datos

  $conn->exec("USE $dbname");



  // Consulta para crear la tabla

  $sqlCrearTabla = "CREATE TABLE datos_usuarios (

        ID INT AUTO_INCREMENT,

        Nombre VARCHAR(50),

        Apellido VARCHAR(50),

        Usuario VARCHAR(50),

        Contraseña VARCHAR(50),

        Estado BOOLEAN,

        Posicion VARCHAR(50),

        PRIMARY KEY(ID, Usuario)

      );



      CREATE TABLE Datos_personales (

        Dni INT PRIMARY KEY,

        Nombre VARCHAR(50),

        Apellido VARCHAR(50),

        Sexo VARCHAR(10),

        Domicilio VARCHAR(100),

        Fecha_nacimiento DATE,

        Nombre_del_tutor VARCHAR(50),

        fecha_act TIMESTAMP DEFAULT CURRENT_TIMESTAMP

      );

      

      CREATE TABLE Datos_internacion (

        Dni INT,

        Fecha_ingreso DATE,

        Sala VARCHAR(50),

        Habitación INT,

        Cama INT,

        Discapacidad VARCHAR(50),

        Observacion VARCHAR(50),

        Diagnostico VARCHAR(50),

        Estado VARCHAR(50),

        Fecha_alta DATE,

        Motivo VARCHAR(50),

        PRIMARY KEY (Dni, Fecha_ingreso),

        FOREIGN KEY (Dni) REFERENCES Datos_personales(Dni)

      );



      CREATE TABLE Datos_domiciliario(

        Dni INT,

        Fecha_ingreso DATE,

        Direccion VARCHAR(50),

        Discapacidad VARCHAR(50),

        Observacion VARCHAR(50),

        Diagnostico VARCHAR(50),

        Estado VARCHAR(50),

        Fecha_alta DATE,

        Motivo VARCHAR(50),

        PRIMARY KEY (Dni, Fecha_ingreso),

        FOREIGN KEY (Dni) REFERENCES Datos_personales(Dni)



      );

      

      CREATE TABLE Datos_pedagogicos (

        Dni INT,

        Fecha_ingreso DATE,

        escRef VARCHAR(45),

        Grado VARCHAR(45),

        poseeEsc VARCHAR(45),

        escComun VARCHAR(45),

        lectContinua VARCHAR(45),

        interpTextos VARCHAR(45),

        lectyescri VARCHAR(45),

        resuelvOpBas VARCHAR(45),

        PRIMARY KEY (Dni, Fecha_ingreso),

        FOREIGN KEY (Dni) REFERENCES Datos_personales(Dni));

      

      

        CREATE TABLE Datos_academ (

        ID INT AUTO_INCREMENT,

        Dni INT,

        Fecha DATE,

        Observación VARCHAR(100),

        Contenido VARCHAR(100),

        Nombre_Profesor VARCHAR(50),

        PRIMARY KEY (ID, Dni),

        FOREIGN KEY (Dni) REFERENCES Datos_personales(Dni));



        CREATE TABLE Datos_Profesor(

        Dni INT,

        Nombre VARCHAR(45),

        Apellido VARCHAR(45),

        Estado BOOLEAN, 

        PRIMARY KEY (DNI));

";

  $conn->exec($sqlCrearTabla);





  $sqlInsertar = "INSERT INTO datos_usuarios(Nombre, Apellido, Usuario, Contraseña, Estado, Posicion) VALUES ('..', '..', 'Administrador', '123', TRUE, 'Administrador')";



  $conn->exec($sqlInsertar);
} catch (PDOException $e) {
}