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

  CREATE TABLE personales_fechas(
    Dni INT NOT NULL,
    Fecha_registro DATE NOT NULL,
    Fecha_alta DATE,
    Motivo VARCHAR(80),
    Estado VARCHAR(45),
    PRIMARY KEY(Dni, Fecha_registro)
  );

  CREATE TABLE Datos_internacion (
    Dni INT,
    Fecha_registro DATE NOT NULL,
    Sala VARCHAR(50),
    Habitacion INT,
    Cama INT,
    Discapacidad VARCHAR(50),
    Observacion VARCHAR(50),
    Diagnostico VARCHAR(50),
    Estado VARCHAR(50),
    PRIMARY KEY (Dni, Fecha_registro),
    FOREIGN KEY (Dni, Fecha_registro) REFERENCES personales_fechas(Dni, Fecha_registro)
);


CREATE TABLE Datos_domiciliario (
Dni INT,
Fecha_registro DATE,
Direccion VARCHAR(50),
Discapacidad VARCHAR(50),
Observacion VARCHAR(50),
Diagnostico VARCHAR(50),
Estado VARCHAR(50),
PRIMARY KEY (Dni, Fecha_registro),
FOREIGN KEY (Dni, Fecha_registro) REFERENCES personales_fechas(Dni, Fecha_registro));

CREATE TABLE Datos_pedagogicos (
Dni INT,
Fecha_registro DATE,
escRef VARCHAR(45),
Grado VARCHAR(45),
poseeEsc VARCHAR(45),
escComun VARCHAR(45),
lectContinua VARCHAR(45),
obs_lectC VARCHAR(100),
interpTextos VARCHAR(45),
obs_interpT VARCHAR(100),
resuelvOpBas VARCHAR(45),
obs_resuelvOpBas VARCHAR(100),
lectyescri VARCHAR(45),
obs_LectyEsc VARCHAR(100),
PRIMARY KEY (Dni, Fecha_registro),
FOREIGN KEY (Dni, Fecha_registro) REFERENCES personales_fechas(Dni, Fecha_registro));

CREATE TABLE datos_notas (
    DNI INT NOT NULL,
    AÑO INT NOT NULL,
    Trimestre VARCHAR(45),
    Lengua_cal FLOAT,
    Lengua_observaciones TEXT,
    Matematica_cal FLOAT,
    Matematica_observaciones TEXT,
    Sociales_cal FLOAT,
    Sociales_observaciones TEXT,
    Tecnologia_cal FLOAT,
    Tecnologia_observaciones TEXT,
    Musica_cal FLOAT,
    Musica_observaciones TEXT,
    Plastica_cal FLOAT,
    Plastica_observaciones TEXT,
    EticayCiudadana_cal FLOAT,
    EticayCiudadana_observaciones TEXT,
    Int_pract_destaca TEXT,
    Int_pract_trabaja TEXT,
    Int_pract_mejorar TEXT,
    Personales_soc_motiv TEXT,
    Personales_soc_trabajo TEXT,
    Personales_soc_respons TEXT,
    Personales_soc_acompañ TEXT,
    Int_equipo_psicologo TEXT,
    Int_equipo_psicopedagogo TEXT,
    Observaciones_generales TEXT,
    PRIMARY KEY (DNI, AÑO,Trimestre),
    FOREIGN KEY (DNI) REFERENCES personales_fechas(DNI)
);

    CREATE TABLE Datos_academ (
    ID INT AUTO_INCREMENT,
    Dni INT,
    Fecha DATE,
    Observación VARCHAR(100),
    Contenido VARCHAR(100),
    Nombre_Profesor VARCHAR(50),
    PRIMARY KEY (ID, Dni),
    FOREIGN KEY (Dni) REFERENCES Datos_personales(Dni));


    CREATE TABLE datos_tabla (
id INT AUTO_INCREMENT,
dni INT NOT NULL,
fecha_r DATE NOT NULL,
observaciones TEXT,
PRIMARY KEY(id, dni)
);


CREATE TABLE datos_estudiante (
    DNI INT,
    Fecha_registro DATE,
    obs TEXT,
    tipo VARCHAR(255),
    construccion VARCHAR(255),
    tenencia VARCHAR(255),
    servicios VARCHAR(255),
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
    observaciones_generales TEXT,
    PRIMARY KEY(DNI, Fecha_registro)
);

CREATE TABLE datos_persona (
    id INT AUTO_INCREMENT PRIMARY KEY,
    DNI INT,
    Fecha_registro DATE,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    edad INT,
    rol VARCHAR(255),
    ocupacion VARCHAR(255),
    escolaridad VARCHAR(255),
    salario_asignacion_pension VARCHAR(255),
    asist VARCHAR(255),
    observaciones TEXT,
    FOREIGN KEY (DNI,Fecha_registro) REFERENCES datos_estudiante(DNI,Fecha_registro)
);";



  $conn->exec($sqlCrearTabla);
} catch (PDOException $e) {
}
