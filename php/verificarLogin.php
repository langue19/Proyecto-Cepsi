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
                }
                exit;
            } else {
                header("Location: /Proyecto-master/login.html?error=1");
                exit;
            }
        } else {
            header("Location: /Proyecto-master/login.html?error=1");
            exit;
        }
    } catch (PDOException $e) {
        // Manejar errores de conexión o consulta
        echo "Error: " . $e->getMessage();
    }
}
?>
    // Recuperar los datos enviados desde el formulario
    

    // Aquí debes realizar la validación de las credenciales con la base de datos
    // Si el usuario y la contraseña son válidos, puedes crear una sesión

    // Ejemplo básico de validación (No utilices esta implementación en producción)
    // Aquí, simplemente verificamos si el usuario es "admin" y la contraseña es "password"
