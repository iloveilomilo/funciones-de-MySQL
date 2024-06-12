<?php 
$miconexion=new mysqli("localhost","desarrollador","","pasteleria");
if ($miconexion->connect_errno) {
    echo"Fallo al conectar con la base de datos";
}
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
?>