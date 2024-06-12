<?php 
    $miconexion= new mysqli("localhost:3306","desarrollador","","pasteleria");
    if ($miconexion->connect_errno) {
        echo "Fallo al conectar con mysql";
    }
    print "opcion 1: <br>";
    echo $miconexion->host_info;
    print "<br>";

    $miconexion =new mysqli("127.0.0.1","desarrollador","","pasteleria");
    if($miconexion->connect_errno){
        echo "Fallo al conectar con mysql";
    }

    print "opcion 2: <br>";
    echo $miconexion->host_info;
    print "<br>";
?>