<?php

echo 'editar_viaje.php?cod_viaje=1&nombre_viaje=Visita Museo&lugar=Museo de ciencias&fecha=27 de mayo';
echo '<br>';

$cod_curso = $_GET['cod_viaje'];
$nombre_curso = $_GET['nombre_viaje'];
$nivel_curso = $_GET['lugar'];
$n_alumnos = $_GET['fecha'];

echo $cod_viaje;
echo '<br>';
echo $nombre_viaje;
echo '<br>';
echo $lugar;
echo '<br>';
echo $fecha;

include_once 'conexion.php';

$sql_editar_viaje = 'UPDATE cursos SET nombre_viaje=?,lugar=?,fecha=? WHERE cod_viaje=?';
$sentencia_editar_viaje = $pdo->prepare($sql_editar_viaje);
$sentencia_editar_viaje->execute(array($nombre_viaje,$lugar,$fecha,$cod_viaje));

header('location:viajes.php');

?>