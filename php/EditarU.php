<html>

<head>
    <title>Agregar Alumno</title>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="\Proyecto-master\Proyecto-master\css\w3.css">
    <link href="\Proyecto-master\Proyecto-master\bootstrap\css\bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/Proyecto-master/Proyecto-master/css/AgregarU.css">
    <link rel="shortcut icon" href="/Proyecto-master/Proyecto-master/favicon/favicon-32x32.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">

    <!-- Aquí incluye el enlace a la biblioteca jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Aquí incluye el enlace a tu archivo JavaScript -->
    <script src="/Proyecto-master/Proyecto-master/js/AgregarU.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand" href="#">
                <img src="\Proyecto-master\Proyecto-master\img\conte1.png" style="width: 40px;" class="rounded-pill" alt="Logo" height="40">
            </a>
            <!-- Título en el centro -->
            <h1 class="navbar-title">FRANCISCO JOSÉ VIANO</h1>

            <!-- Avatar desplegable a la derecha -->
            <div class="avatar-dropdown">
                <div style="display: flex; align-items:center;" class="navbar-toggle" onclick="toggleMenu()">
                    <img src="\Proyecto-master\Proyecto-master\img\director.png" alt="☰" height="40" id="avatarImg">
                    <a>☰</a>
                </div>
                <ul class="navbar-menu" id="navbarMenu">
                    <li><a href="cards.php">Inicio</a></li>
                    <li><a href="formularioAlumno.php">Gestion Alumnos</a></li>
                    <li><a href="formularioUsuario.php">Gestion Usuarios</a></li>
                    <li><a href="cerrarSesion.php">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card mb-3">
                    <?php
                    // AgregarU.html
                    if (isset($_GET['id'])) {
                        // Obtener el ID del registro desde la URL
                        $id = $_GET['id'];

                        // Realizar una consulta a la base de datos para obtener los datos del registro
                        // Asegúrate de reemplazar los valores en 'nombre_usuario', 'contraseña_usuario', 'estado_usuario', 'posicion_usuario'
                        // con los nombres de las columnas en tu tabla de datos_usuarios
                        // y 'nombre_tabla' con el nombre real de la tabla.
                        // Además, ajusta la conexión a tu base de datos.
                        include 'crearTabla.php';
                        $sql = "SELECT * FROM datos_usuarios WHERE ID = :id";
                        $consulta = $conn->prepare($sql);
                        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
                        if ($consulta->execute()) {
                            $registro = $consulta->fetch(PDO::FETCH_ASSOC);
                        } else {
                            // Manejo de error si la consulta falla
                            echo "Error al obtener los datos del registro.";
                            exit;
                        }
                    }
                    ?>

                    <form id="msform" action="editarFin.php" method="post">


                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <label for="Usuario">Usuario</label>
                                    <input name="Usuario" type="text" style="background-color: antiquewhite;" id="user" placeholder="Usuario" value="<?php echo isset($registro['Usuario']) ? $registro['Usuario'] : ''; ?>" readonly>
                                    <label for="nomb">Contraseña</label>
                                    <input name="Contraseña" type="text" class="fieldlabels" id="contra" placeholder="Contraseña" value="<?php echo isset($registro['Contraseña']) ? $registro['Contraseña'] : ''; ?>">
                                    <label for="Contraseña">Estado:</label>
                                    <select name="Estado" id="Estado">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="1" <?php echo isset($registro['Estado']) && $registro['Estado'] == 1 ? 'selected' : ''; ?>>Activo</option>
                                        <option value="0" <?php echo isset($registro['Estado']) && $registro['Estado'] == 0 ? 'selected' : ''; ?>>Inactivo</option>
                                    </select>
                                    <label for="Posicion">Posicion:</label>
                                    <select name="Posicion" id="Posicion">
                                        <option value="Sin especificar">Seleccionar</option>
                                        <option value="Administrador" <?php echo isset($registro['Posicion']) && $registro['Posicion'] == 'Administrador' ? 'selected' : ''; ?>>Administrador</option>
                                        <option value="Usuario" <?php echo isset($registro['Posicion']) && $registro['Posicion'] == 'Usuario' ? 'selected' : ''; ?>>Usuario</option>
                                    </select>
                                    <!-- Asegúrate de que este campo esté oculto y tenga el valor del ID del registro que se está editando -->
                                    <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">
                                </div>
                            </div>
                            <input type="submit" name="next" class="next action-button" style="width: 160px;" value="Guardar y salir!" />
                        </fieldset>

                    </form>

                </div>
            </div>
        </div>
    </div>

</body>

</html>