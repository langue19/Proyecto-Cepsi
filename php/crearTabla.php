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



        CREATE TABLE datos_tabla (

    id INT AUTO_INCREMENT PRIMARY KEY,

    dni VARCHAR(20) NOT NULL,

    fecha_r DATE NOT NULL,

    observaciones TEXT,

    UNIQUE KEY unique_dni_fecha (dni, fecha_r)

);

CREATE TABLE datos_estudiante (

    id INT AUTO_INCREMENT PRIMARY KEY,
    DNI INT,

    nombre1 VARCHAR(255),

    apellido1 VARCHAR(255),

    edad1 INT,

    rol1 VARCHAR(255),

    ocupacion1 VARCHAR(255),

    escolaridad1 VARCHAR(255),

    salario_asignacion_pension1 VARCHAR(255),

    asist1 VARCHAR(255),

    observaciones1 TEXT,

    

    nombre2 VARCHAR(255),

    apellido2 VARCHAR(255),

    edad2 INT,

    rol2 VARCHAR(255),

    ocupacion2 VARCHAR(255),

    escolaridad2 VARCHAR(255),

    salario_asignacion_pension2 VARCHAR(255),

    asist2 VARCHAR(255),

    observaciones2 TEXT,

    

    obs TEXT,

    

    numconvi INT,

    numhabit INT,

    obsG TEXT,

    mediosT TEXT,

    

    diagnostico TEXT,

    medico_cabecera TEXT,

    tratamiento TEXT,

    medicacion TEXT,

    tiempo_internacion VARCHAR(255),

    tiempo VARCHAR(255),

    pronostico TEXT,

    observaciones TEXT,

    manifestaciones TEXT,

    enfermedades_previas TEXT,

    medicacion_incidir TEXT,

    tratamientos_terapeutica TEXT,

    

    nivel_inicial_sala VARCHAR(255),

    nivel_inicial_asistio VARCHAR(255),

    nivel_inicial_institucion VARCHAR(255),

    obsE TEXT,

    

    nivel_primario_grado VARCHAR(255),

    nivel_primario_tutor VARCHAR(255),

    

    promocion_automatica VARCHAR(255),

    observaciones_promocion TEXT,

    cambios_escuela VARCHAR(255),

    institucion_cambios VARCHAR(255),

    repitencia VARCHAR(255),

    grado_repitencia VARCHAR(255),

    veces_repitencia VARCHAR(255),

    ausentismo VARCHAR(255),

    observaciones_ausentismo TEXT,

    desercion VARCHAR(255),

    observaciones_desercion TEXT,

    derivacion VARCHAR(255),

    intervencion_equipo VARCHAR(255),

    ppi VARCHAR(255),

    caracter_anterior VARCHAR(255),

    caracter_actual VARCHAR(255),

    nombre_caracter VARCHAR(255),

    

    educacion_anterior VARCHAR(255),

    institucion_educacion VARCHAR(255),

    grado_educacion VARCHAR(255),

    docente_educacion VARCHAR(255),

    tiempo_intervencion VARCHAR(255),

    

    observaciones_generales TEXT

);







";



  $conn->exec($sqlCrearTabla);





} catch (PDOException $e) {

}

?>