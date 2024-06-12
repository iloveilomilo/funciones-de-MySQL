<?php
      $miconexion = new mysqli("localhost", "desarrollador", "", "pasteleria");
      if ($miconexion->connect_errno) {
          echo "fallo al conectar con MySQL";
      }

      $resultado=$miconexion->query("SELECT * FROM clientes ORDER BY id ASC");
      echo "<H3>Orden inverso</H3>";
      for ($num_fila =$resultado-> num_rows-1;$num_fila>=0;$num_fila--) {
        $resultado->data_seek($num_fila);
        $fila=$resultado->fetch_assoc();

        echo "id = ".$fila["id"];
        echo "Nombres = ".$fila["nombres"];
        echo "Apellidos = ".$fila["Apellidos"];
        echo "Usuario = @ ".$fila["Usuario"]. "<br>";
        
      }

      echo "<h3>Orden en conjunto de resultados</h3> <br>";
      $resultado->data_seek(0);
      while($fila=$resultado->fetch_assoc()){
        echo "id = ".$fila["id"];
        echo "Nombres = ".$fila["nombres"];
        echo "Apellidos = ".$fila["Apellidos"];
        echo "Usuario = @ ".$fila["Usuario"]. "<br>";
      }
      
?>