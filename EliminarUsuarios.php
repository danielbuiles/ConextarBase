<?php

include("BaseDatos.php");

$id=$_GET["id"];

$catch=new baseDatos();

$consultaSQL="DELETE FROM usuaios WHERE idUsuario='$id'";

$catch->EliminarDatos($consultaSQL);
?>