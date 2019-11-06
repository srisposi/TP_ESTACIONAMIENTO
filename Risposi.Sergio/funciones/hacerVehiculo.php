<?php
/*$miObjeto = new stdClass();

date_default_timezone_set('America/Argentina/Buenos_Aires');
$horaIngreso = mktime();

$miObjeto->nombre = $_GET['inputPatente'];
$miObjeto->fechaIngreso = $horaIngreso;

$archivo = fopen('../usuario/vehiculo.txt', 'a');
fwrite($archivo, json_encode($miObjeto)."\n");

fclose($archivo);
header("Location: ../paginas/ingresarVehiculo.php?exito=exito");
*/

include 'AccesoDatos.php';
$miObjeto = new stdClass();
$miObjeto->nombre = $_GET['inputPatente'];
//$miObjeto->apellido = $_GET['inputPassword'];
$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$select="INSERT INTO factura(patente) VALUES ('$miObjeto->nombre')";
$consulta =$objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();

header("Location: ../paginas/ingresarVehiculo.php?exito=exito");



?>