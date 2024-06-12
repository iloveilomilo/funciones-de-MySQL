<?php
    $miconexion = new mysqli("localhost", "desarrollador", "", "pasteleria");
    if ($miconexion->connect_errno) {
        echo "Fallo al conectar con MySQL";
    }

    // Verificar si se han enviado los datos del formulario
    if(isset($_POST['id']) && isset($_POST['nombres']) && isset($_POST['apellidos']) && isset($_POST['usuario'])){
        // Obtener los datos del formulario
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $usuario = $_POST['usuario'];
        // Preparar y ejecutar la consulta para insertar el nuevo usuario
        $insertar = $miconexion->prepare("INSERT INTO clientes (id, nombres, apellidos, Usuario) VALUES (?, ?, ?, ?)");
        $insertar->bind_param("isss", $id, $nombres, $apellidos, $usuario);
        $resultado = $insertar->execute();
        // Verificar si la inserción fue exitosa
        if($resultado) {
            echo "Nuevo usuario insertado correctamente.";
        } else {
            echo "Error al insertar el nuevo usuario.";
        }
        // Cerrar la consulta preparada
        $insertar->close();
    }
?>
