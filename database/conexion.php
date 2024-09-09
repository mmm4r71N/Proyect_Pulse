<?php
$sevidor="localhost";
$usuario="root";
$contra="";
$base_de_datos="pp_db";


$enlace = mysqli_connect($sevidor, $usuario,$contra,$base_de_datos);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL.";
    
};
/*
echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;*/

?>