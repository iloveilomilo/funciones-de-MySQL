<?php
    $miconexion = new mysqli("localhost", "desarrollador", "", "pasteleria");
    if ($miconexion->connect_errno) {
        echo "fallo al conectar con MySQL";
    }

    if (!$miconexion->query("CREATE TABLE clientes (id INT PRIMARY KEY, nombres VARCHAR(20), Apellidos VARCHAR(20), Usuario VARCHAR(20))")) {
        echo "Fallo al crear la tabla";
    } else {
        echo "La tabla 'clientes' se creó correctamente<br>";
    }

    if (!$miconexion->query("INSERT INTO clientes VALUES (1,'Abisai','Cortes Rodriguez','Rodriguez')")) {
        echo "Fallo al insertar datos";
    }

?>
