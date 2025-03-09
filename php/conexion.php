<?php

$servidor   ="192.168.100.143";
$usuario    ="medica";
$contrasenha ="Base.Datos.#1";
$BD         ="Medica";

$conexion = mysqli_connect($servidor, $usuario, $contrasenha, $BD);

if(!$conexion)
{
    echo "Fallo la conexión <br>";
    die("Connection failed: ".mysqli_connect_error());
}
else{
    //echo "Conexión Exitosa";
}
?>
