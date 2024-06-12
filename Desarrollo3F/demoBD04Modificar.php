<?php
    $miconexion = new mysqli("localhost", "desarrollador", "", "pasteleria");
    if ($miconexion->connect_errno) {
        echo "Fallo al conectar con MySQL";
    }

    // Verificar si se ha enviado un formulario para actualizar datos
    if(isset($_POST['id']) && isset($_POST['nuevos_nombres']) && isset($_POST['nuevos_apellidos']) && isset($_POST['nuevo_usuario'])){
        // Obtener los valores enviados por el formulario
        $id = $_POST['id'];
        $nuevosNombres = $_POST['nuevos_nombres'];
        $nuevosApellidos = $_POST['nuevos_apellidos'];
        $nuevoUsuario = $_POST['nuevo_usuario'];

        // Actualizar los datos en la base de datos
        $actualizar = $miconexion->prepare("UPDATE clientes SET nombres=?, apellidos=?, Usuario=? WHERE id=?");
        $actualizar->bind_param("sssi", $nuevosNombres, $nuevosApellidos, $nuevoUsuario, $id);
        $resultado = $actualizar->execute();

        if($resultado) {
            echo "Datos actualizados correctamente.";
        } else {
            echo "Error al actualizar los datos.";
        }

        $actualizar->close();
    }
?>

<form action="" method="POST">
    <label>ID del cliente a modificar:</label><br>
    <input type="text" name="id"><br>
    <label>Nuevos nombres:</label><br>
    <input type="text" name="nuevos_nombres"><br>
    <label>Nuevos apellidos:</label><br>
    <input type="text" name="nuevos_apellidos"><br>
    <label>Nuevo usuario:</label><br>
    <input type="text" name="nuevo_usuario"><br>
    <input type="submit" value="Actualizar datos">
</form>
