<?php
    $miconexion = new mysqli("localhost", "desarrollador", "", "pasteleria");
    if ($miconexion->connect_errno) {
        echo "Fallo al conectar con MySQL";
    }

    // Verificar si se ha enviado un formulario para borrar datos
    if(isset($_POST['id_borrar'])){
        // Obtener el ID del cliente a borrar
        $idBorrar = $_POST['id_borrar'];

        // Eliminar el cliente de la base de datos
        $eliminar = $miconexion->prepare("DELETE FROM clientes WHERE id=?");
        $eliminar->bind_param("i", $idBorrar);
        $resultado = $eliminar->execute();

        if($resultado) {
            echo "Cliente eliminado correctamente.";
        } else {
            echo "Error al eliminar el cliente.";
        }

        $eliminar->close();
    }
?>

<form action="" method="POST">
    <label>ID del cliente a borrar:</label><br>
    <input type="text" name="id_borrar"><br>
    <input type="submit" value="Borrar cliente">
</form>
