<?php







include 'conexion.php';



include 'crearBD.php';



include 'crearTabla.php';





// Procesar y guardar los datos del formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);

    // Recoger los datos del formulario
    $dni = $_POST['dni'];
    $fecha_actual = $_POST['fechaActual'];


    $nombre1 = $_POST["nombre1"];
    $apellido1 = $_POST["apellido1"];
    $edad1 = $_POST["edad1"];
    $rol1 = $_POST["rol1"];
    $ocupacion1 = $_POST["ocupacion1"];
    $escolaridad1 = $_POST["escolaridad1"];
    $salario_asignacion_pension1 = $_POST["salario_asignacion_pension1"];
    $asist1 = $_POST["asist1"];
    $observaciones1 = $_POST["observaciones1"];

    $nombre2 = $_POST["nombre2"];
    $apellido2 = $_POST["apellido2"];
    $edad2 = $_POST["edad2"];
    $rol2 = $_POST["rol2"];
    $ocupacion2 = $_POST["ocupacion2"];
    $escolaridad2 = $_POST["escolaridad2"];
    $salario_asignacion_pension2 = $_POST["salario_asignacion_pension2"];
    $asist2 = $_POST["asist2"];
    $observaciones2 = $_POST["observaciones2"];

    $nombre3 = $_POST["nombre3"];
    $apellido3 = $_POST["apellido3"];
    $edad3 = $_POST["edad3"];
    $rol3 = $_POST["rol3"];
    $ocupacion3 = $_POST["ocupacion3"];
    $escolaridad3 = $_POST["escolaridad3"];
    $salario_asignacion_pension3 = $_POST["salario_asignacion_pension3"];
    $asist3 = $_POST["asist3"];
    $observaciones3 = $_POST["observaciones3"];

    $nombre4 = $_POST["nombre4"];
    $apellido4 = $_POST["apellido4"];
    $edad4 = $_POST["edad4"];
    $rol4 = $_POST["rol4"];
    $ocupacion4 = $_POST["ocupacion4"];
    $escolaridad4 = $_POST["escolaridad4"];
    $salario_asignacion_pension4 = $_POST["salario_asignacion_pension4"];
    $asist4 = $_POST["asist4"];
    $observaciones4 = $_POST["observaciones4"];

    $nombre5 = $_POST["nombre5"];
    $apellido5 = $_POST["apellido5"];
    $edad5 = $_POST["edad5"];
    $rol5 = $_POST["rol5"];
    $ocupacion5 = $_POST["ocupacion5"];
    $escolaridad5 = $_POST["escolaridad5"];
    $salario_asignacion_pension5 = $_POST["salario_asignacion_pension5"];
    $asist5 = $_POST["asist5"];
    $observaciones5 = $_POST["observaciones5"];

    $nombre6 = $_POST["nombre6"];
    $apellido6 = $_POST["apellido6"];
    $edad6 = $_POST["edad6"];
    $rol6 = $_POST["rol6"];
    $ocupacion6 = $_POST["ocupacion6"];
    $escolaridad6 = $_POST["escolaridad6"];
    $salario_asignacion_pension6 = $_POST["salario_asignacion_pension6"];
    $asist6 = $_POST["asist6"];
    $observaciones6 = $_POST["observaciones6"];

    $nombre7 = $_POST["nombre7"];
    $apellido7 = $_POST["apellido7"];
    $edad7 = $_POST["edad7"];
    $rol7 = $_POST["rol7"];
    $ocupacion7 = $_POST["ocupacion7"];
    $escolaridad7 = $_POST["escolaridad7"];
    $salario_asignacion_pension7 = $_POST["salario_asignacion_pension7"];
    $asist7 = $_POST["asist7"];
    $observaciones7 = $_POST["observaciones7"];

    $obs = $_POST["obs"];

    $tipo = implode(", ", $_POST['tipo']);
    $construccion = implode(", ", $_POST['construccion']);
    $tenencia = implode(", ", $_POST['tenencia']);
    $servicios = implode(", ", $_POST['servicios']);


    $numconvi = $_POST["numconvi"];
    $numhabit = $_POST["numhabit"];
    $obsG = $_POST["obsG"];
    $mediosT = $_POST["mediosT"];

    $diagnostico = $_POST["diagnostico"];
    $medico_cabecera = $_POST["medico_cabecera"];
    $tratamiento = $_POST["tratamiento"];
    $medicacion = $_POST["medicacion"];
    $tiempo_internacion = $_POST["tiempo_internacion"];
    $tiempo = $_POST["tiempo"];
    $pronostico = $_POST["pronostico"];
    $observaciones = $_POST["observaciones"];
    $manifestaciones = $_POST["manifestaciones"];
    $enfermedades_previas = $_POST["enfermedades_previas"];
    $medicacion_incidir = $_POST["medicacion_incidir"];
    $tratamientos_terapeutica = $_POST["tratamientos_terapeutica"];

    $nivel_inicial_sala = $_POST["nivel_inicial_sala"];
    $nivel_inicial_asistio = $_POST["nivel_inicial_asistio"];
    $nivel_inicial_institucion = $_POST["nivel_inicial_institucion"];
    $obsE = $_POST["obsE"];

    $nivel_primario_grado = $_POST["nivel_primario_grado"];
    $nivel_primario_tutor = $_POST["nivel_primario_tutor"];

    $promocion_automatica = $_POST["promocion_automatica"];
    $observaciones_promocion = $_POST["observaciones_promocion"];
    $cambios_escuela = $_POST["cambios_escuela"];
    $institucion_cambios = $_POST["institucion_cambios"];
    $repitencia = $_POST["repitencia"];
    $grado_repitencia = $_POST["grado_repitencia"];
    $veces_repitencia = $_POST["veces_repitencia"];
    $ausentismo = $_POST["ausentismo"];
    $observaciones_ausentismo = $_POST["observaciones_ausentismo"];
    $desercion = $_POST["desercion"];
    $observaciones_desercion = $_POST["observaciones_desercion"];
    $derivacion = $_POST["derivacion"];
    $intervencion_equipo = $_POST["intervencion_equipo"];
    $ppi = $_POST["desercion"];
    $caracter_anterior = $_POST["caracter_anterior"];
    $caracter_actual = $_POST["caracter_actual"];
    $nombre_caracter = $_POST["nombre_caracter"];

    $educacion_anterior = $_POST["educacion_anterior"];
    $institucion_educacion = $_POST["institucion_educacion"];
    $grado_educacion = $_POST["grado_educacion"];
    $docente_educacion = $_POST["docente_educacion"];
    $tiempo_intervencion = $_POST["tiempo_intervencion"];

    $observaciones_generales = $_POST["observaciones_generales"];



    // Preparar la consulta SQL

    $sql = "INSERT INTO datos_estudiante (DNI,Fecha_registro,tipo,construccion,tenencia,servicios, obs, numconvi, numhabit, obsG, mediosT, diagnostico, medico_cabecera, tratamiento, medicacion, tiempo_internacion, tiempo, pronostico, observaciones, manifestaciones, enfermedades_previas, medicacion_incidir, tratamientos_terapeutica, nivel_inicial_sala, nivel_inicial_asistio, nivel_inicial_institucion, obsE, nivel_primario_grado, nivel_primario_tutor, promocion_automatica, observaciones_promocion, cambios_escuela, institucion_cambios, repitencia, grado_repitencia, veces_repitencia, ausentismo, observaciones_ausentismo, desercion, observaciones_desercion, derivacion, intervencion_equipo, ppi, caracter_anterior, caracter_actual, nombre_caracter, educacion_anterior, institucion_educacion, grado_educacion, docente_educacion, tiempo_intervencion, observaciones_generales) 

        VALUES (:dni,:fecha_registro,:tipo,:construccion,:tenencia,:servicios,:obs, :numconvi, :numhabit, :obsG, :mediosT, :diagnostico, :medico_cabecera, :tratamiento, :medicacion, :tiempo_internacion, :tiempo, :pronostico, :observaciones, :manifestaciones, :enfermedades_previas, :medicacion_incidir, :tratamientos_terapeutica, :nivel_inicial_sala, :nivel_inicial_asistio, :nivel_inicial_institucion, :obsE, :nivel_primario_grado, :nivel_primario_tutor, :promocion_automatica, :observaciones_promocion, :cambios_escuela, :institucion_cambios, :repitencia, :grado_repitencia, :veces_repitencia, :ausentismo, :observaciones_ausentismo, :desercion, :observaciones_desercion, :derivacion, :intervencion_equipo, :ppi, :caracter_anterior, :caracter_actual, :nombre_caracter, :educacion_anterior, :institucion_educacion, :grado_educacion, :docente_educacion, :tiempo_intervencion, :observaciones_generales)";



    $consulta = $conn->prepare($sql);

    $consulta->bindParam(':dni', $dni);
    $consulta->bindParam(':fecha_registro', $fecha_actual);
    $consulta->bindParam(':tipo', $tipo);
    $consulta->bindParam(':construccion', $construccion);
    $consulta->bindParam(':tenencia', $tenencia);
    $consulta->bindParam(':servicios', $servicios);


    $consulta->bindParam(':obs', $obs);
    $consulta->bindParam(':numconvi', $numconvi);
    $consulta->bindParam(':numhabit', $numhabit);
    $consulta->bindParam(':obsG', $obsG);
    $consulta->bindParam(':mediosT', $mediosT);

    $consulta->bindParam(':diagnostico', $diagnostico);
    $consulta->bindParam(':medico_cabecera', $medico_cabecera);
    $consulta->bindParam(':tratamiento', $tratamiento);
    $consulta->bindParam(':medicacion', $medicacion);
    $consulta->bindParam(':tiempo_internacion', $tiempo_internacion);
    $consulta->bindParam(':tiempo', $tiempo);
    $consulta->bindParam(':pronostico', $pronostico);
    $consulta->bindParam(':observaciones', $observaciones);
    $consulta->bindParam(':manifestaciones', $manifestaciones);
    $consulta->bindParam(':enfermedades_previas', $enfermedades_previas);
    $consulta->bindParam(':medicacion_incidir', $medicacion_incidir);
    $consulta->bindParam(':tratamientos_terapeutica', $tratamientos_terapeutica);

    $consulta->bindParam(':nivel_inicial_sala', $nivel_inicial_sala);
    $consulta->bindParam(':nivel_inicial_asistio', $nivel_inicial_asistio);
    $consulta->bindParam(':nivel_inicial_institucion', $nivel_inicial_institucion);
    $consulta->bindParam(':obsE', $obsE);

    $consulta->bindParam(':nivel_primario_grado', $nivel_primario_grado);
    $consulta->bindParam(':nivel_primario_tutor', $nivel_primario_tutor);

    $consulta->bindParam(':promocion_automatica', $promocion_automatica);
    $consulta->bindParam(':observaciones_promocion', $observaciones_promocion);
    $consulta->bindParam(':cambios_escuela', $cambios_escuela);
    $consulta->bindParam(':institucion_cambios', $institucion_cambios);

    $consulta->bindParam(':repitencia', $repitencia);
    $consulta->bindParam(':grado_repitencia', $grado_repitencia);
    $consulta->bindParam(':veces_repitencia', $veces_repitencia);
    $consulta->bindParam(':ausentismo', $ausentismo);
    $consulta->bindParam(':observaciones_ausentismo', $observaciones_ausentismo);
    $consulta->bindParam(':desercion', $desercion);
    $consulta->bindParam(':observaciones_desercion', $observaciones_desercion);
    $consulta->bindParam(':derivacion', $derivacion);
    $consulta->bindParam(':intervencion_equipo', $intervencion_equipo);
    $consulta->bindParam(':ppi', $ppi);
    $consulta->bindParam(':caracter_anterior', $caracter_anterior);
    $consulta->bindParam(':caracter_actual', $caracter_actual);
    $consulta->bindParam(':nombre_caracter', $nombre_caracter);

    $consulta->bindParam(':educacion_anterior', $educacion_anterior);
    $consulta->bindParam(':institucion_educacion', $institucion_educacion);
    $consulta->bindParam(':grado_educacion', $grado_educacion);
    $consulta->bindParam(':docente_educacion', $docente_educacion);
    $consulta->bindParam(':tiempo_intervencion', $tiempo_intervencion);

    $consulta->bindParam(':observaciones_generales', $observaciones_generales);


    $consulta->execute();


    if ($nombre1 != null) {
        $sql1 = "INSERT INTO datos_persona (DNI, Fecha_registro, nombre, apellido, edad, rol, ocupacion, escolaridad, salario_asignacion_pension, asist, observaciones) 
        VALUES (:dni,:fecha_registro,:nombre1, :apellido1, :edad1, :rol1, :ocupacion1, :escolaridad1, :salario_asignacion_pension1, :asist1, :observaciones1)";
       
       $consulta1 = $conn->prepare($sql1);

        $consulta1->bindParam(':dni', $dni);
        $consulta1->bindParam(':fecha_registro', $fecha_actual);
        $consulta1->bindParam(':nombre1', $nombre1);
        $consulta1->bindParam(':apellido1', $apellido1);
        $consulta1->bindParam(':edad1', $edad1);
        $consulta1->bindParam(':rol1', $rol1);
        $consulta1->bindParam(':ocupacion1', $ocupacion1);
        $consulta1->bindParam(':escolaridad1', $escolaridad1);
        $consulta1->bindParam(':salario_asignacion_pension1', $salario_asignacion_pension1);
        $consulta1->bindParam(':asist1', $asist1);
        $consulta1->bindParam(':observaciones1', $observaciones1);

        $consulta1->execute();
    }
    if($nombre2 != null){
        $sql2 = "INSERT INTO datos_persona (DNI, Fecha_registro, nombre, apellido, edad, rol, ocupacion, escolaridad, salario_asignacion_pension, asist, observaciones) 
        VALUES (:dni,:fecha_registro,:nombre2, :apellido2, :edad2, :rol2, :ocupacion2, :escolaridad2, :salario_asignacion_pension2, :asist2, :observaciones2)";
       
       $consulta2 = $conn->prepare($sql2);

        $consulta2->bindParam(':dni', $dni);
        $consulta2->bindParam(':fecha_registro', $fecha_actual);
        $consulta2->bindParam(':nombre2', $nombre2);
        $consulta2->bindParam(':apellido2', $apellido2);
        $consulta2->bindParam(':edad2', $edad2);
        $consulta2->bindParam(':rol2', $rol2);
        $consulta2->bindParam(':ocupacion2', $ocupacion2);
        $consulta2->bindParam(':escolaridad2', $escolaridad2);
        $consulta2->bindParam(':salario_asignacion_pension2', $salario_asignacion_pension2);
        $consulta2->bindParam(':asist2', $asist2);
        $consulta2->bindParam(':observaciones2', $observaciones2);

        $consulta2->execute();
    } if($nombre3 != null){
        $sql3 = "INSERT INTO datos_persona (DNI, Fecha_registro, nombre, apellido, edad, rol, ocupacion, escolaridad, salario_asignacion_pension, asist, observaciones) 
        VALUES (:dni,:fecha_registro,:nombre3, :apellido3, :edad3, :rol3, :ocupacion3, :escolaridad3, :salario_asignacion_pension3, :asist3, :observaciones3)";
       
       $consulta3 = $conn->prepare($sql3);

        $consulta3->bindParam(':dni', $dni);
        $consulta3->bindParam(':fecha_registro', $fecha_actual);
        $consulta3->bindParam(':nombre3', $nombre3);
        $consulta3->bindParam(':apellido3', $apellido3);
        $consulta3->bindParam(':edad3', $edad3);
        $consulta3->bindParam(':rol3', $rol3);
        $consulta3->bindParam(':ocupacion3', $ocupacion3);
        $consulta3->bindParam(':escolaridad3', $escolaridad3);
        $consulta3->bindParam(':salario_asignacion_pension3', $salario_asignacion_pension3);
        $consulta3->bindParam(':asist3', $asist3);
        $consulta3->bindParam(':observaciones3', $observaciones3);

        $consulta3->execute();
    } 
    if($nombre4 != null){
        $sql4 = "INSERT INTO datos_persona (DNI, Fecha_registro, nombre, apellido, edad, rol, ocupacion, escolaridad, salario_asignacion_pension, asist, observaciones) 
        VALUES (:dni,:fecha_registro,:nombre4, :apellido4, :edad4, :rol4, :ocupacion4, :escolaridad4, :salario_asignacion_pension4, :asist4, :observaciones4)";
       
       $consulta4 = $conn->prepare($sql4);

        $consulta4->bindParam(':dni', $dni);
        $consulta4->bindParam(':fecha_registro', $fecha_actual);
        $consulta4->bindParam(':nombre4', $nombre4);
        $consulta4->bindParam(':apellido4', $apellido4);
        $consulta4->bindParam(':edad4', $edad4);
        $consulta4->bindParam(':rol4', $rol4);
        $consulta4->bindParam(':ocupacion4', $ocupacion4);
        $consulta4->bindParam(':escolaridad4', $escolaridad4);
        $consulta4->bindParam(':salario_asignacion_pension4', $salario_asignacion_pension4);
        $consulta4->bindParam(':asist4', $asist4);
        $consulta4->bindParam(':observaciones4', $observaciones4);

        $consulta4->execute();
    } 
    if($nombre5 != null){
        $sql5 = "INSERT INTO datos_persona (DNI, Fecha_registro, nombre, apellido, edad, rol, ocupacion, escolaridad, salario_asignacion_pension, asist, observaciones) 
        VALUES (:dni,:fecha_registro,:nombre5, :apellido5, :edad5, :rol5, :ocupacion5, :escolaridad5, :salario_asignacion_pension5, :asist5, :observaciones5)";
       
       $consulta5 = $conn->prepare($sql5);

        $consulta5->bindParam(':dni', $dni);
        $consulta5->bindParam(':fecha_registro', $fecha_actual);
        $consulta5->bindParam(':nombre5', $nombre5);
        $consulta5->bindParam(':apellido5', $apellido5);
        $consulta5->bindParam(':edad5', $edad5);
        $consulta5->bindParam(':rol5', $rol5);
        $consulta5->bindParam(':ocupacion5', $ocupacion5);
        $consulta5->bindParam(':escolaridad5', $escolaridad5);
        $consulta5->bindParam(':salario_asignacion_pension5', $salario_asignacion_pension5);
        $consulta5->bindParam(':asist5', $asist5);
        $consulta5->bindParam(':observaciones5', $observaciones5);

        $consulta5->execute();
    } 
    if($nombre6 != null){
        $sql6 = "INSERT INTO datos_persona (DNI, Fecha_registro, nombre, apellido, edad, rol, ocupacion, escolaridad, salario_asignacion_pension, asist, observaciones) 
        VALUES (:dni,:fecha_registro,:nombre6, :apellido6, :edad6, :rol6, :ocupacion6, :escolaridad6, :salario_asignacion_pension6, :asist6, :observaciones6)";
       
       $consulta6 = $conn->prepare($sql6);

        $consulta6->bindParam(':dni', $dni);
        $consulta6->bindParam(':fecha_registro', $fecha_actual);
        $consulta6->bindParam(':nombre6', $nombre6);
        $consulta6->bindParam(':apellido6', $apellido6);
        $consulta6->bindParam(':edad6', $edad6);
        $consulta6->bindParam(':rol6', $rol6);
        $consulta6->bindParam(':ocupacion6', $ocupacion6);
        $consulta6->bindParam(':escolaridad6', $escolaridad6);
        $consulta6->bindParam(':salario_asignacion_pension6', $salario_asignacion_pension6);
        $consulta6->bindParam(':asist6', $asist6);
        $consulta6->bindParam(':observaciones6', $observaciones6);

        $consulta6->execute();
    } 
    if($nombre7 != null){
        $sql7 = "INSERT INTO datos_persona (DNI, Fecha_registro, nombre, apellido, edad, rol, ocupacion, escolaridad, salario_asignacion_pension, asist, observaciones) 
        VALUES (:dni,:fecha_registro,:nombre7, :apellido7, :edad7, :rol7, :ocupacion7, :escolaridad7, :salario_asignacion_pension7, :asist7, :observaciones7)";
       
       $consulta7 = $conn->prepare($sql7);

        $consulta7->bindParam(':dni', $dni);
        $consulta7->bindParam(':fecha_registro', $fecha_actual);
        $consulta7->bindParam(':nombre7', $nombre7);
        $consulta7->bindParam(':apellido7', $apellido7);
        $consulta7->bindParam(':edad7', $edad7);
        $consulta7->bindParam(':rol7', $rol7);
        $consulta7->bindParam(':ocupacion7', $ocupacion7);
        $consulta7->bindParam(':escolaridad7', $escolaridad7);
        $consulta7->bindParam(':salario_asignacion_pension7', $salario_asignacion_pension7);
        $consulta7->bindParam(':asist7', $asist7);
        $consulta7->bindParam(':observaciones7', $observaciones7);

        $consulta7->execute();
    } 
}





header("location: formularioAlumno.php");
