<?php

include 'conexion.php';
include 'crearBD.php';
include 'crearTabla.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pwd = $_POST["psw"];

    try {
        // Ejecutar la consulta SQL
        $stmt = $conn->query("SELECT * FROM datos_usuarios");

        // Variable para indicar si se encontró una coincidencia válida
        $found = false;

        // Verificar si se obtuvieron resultados
        if ($stmt->rowCount() > 0) {
            // Procesar los datos obtenidos
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Acceder a los valores de cada fila
                $user1 = $row["Usuario"];
                $psw1 = $row["Contraseña"];
                $posicion = $row["Posicion"];
                $estado = $row["Estado"]; // Agregar esta línea

                if ($user === $user1 && $pwd === $psw1 && $estado !== 0) {
                    // Guardar la posición del usuario en la sesión
                    session_start();
                    $_SESSION["usuario"] = $user;
                    $_SESSION["Posicion"] = $posicion;

                    // Guardar el nombre y el apellido del usuario en la sesión
                    $_SESSION["Apellido"] = $row["Apellido"];


                    // Marcar como encontrada una coincidencia válida
                    $found = true;

                    // Salir del bucle ya que hemos encontrado una coincidencia
                    break;
                }
            }

            // Verificar si se encontró una coincidencia válida
            if ($found) {
                if ($posicion == "Administrador") {
                    header("Location: cards.php");
                } elseif ($posicion == "Usuario") {
                    header("Location: formularioAlumno.php");
                } elseif ($posicion == "Psicopedagoga") {
                    header("Location: formularioAlumno.php");
                } else {
                    header("Location: /Proyecto-master/Proyecto-master/login.html?error=1");
                    exit;
                }
                exit;
            } else {
                header("Location: /Proyecto-master/Proyecto-master/login.html?error=1");
                exit;
            }
        } else {
            header("Location: /Proyecto-master/Proyecto-master/login.html?error=1");
            exit;
        }
    } catch (PDOException $e) {
        // Manejar errores de conexión o consulta
        echo "Error: " . $e->getMessage();
    }
}