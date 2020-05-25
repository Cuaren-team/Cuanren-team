<?php
include_once 'connection.php';

$cod_viaje = $_GET['cod_viaje'];

$sql_eliminar_viaje = 'DELETE FROM viajes WHERE cod_viaje=?';
$sentencia_eliminar_viaje = $pdo->prepare($sql_eliminar_viaje);
$sentencia_eliminar_viaje->execute(array($cod_viaje));

header('location:index1.php');
