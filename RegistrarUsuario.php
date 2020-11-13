<?php
    include("BaseDatos.php");

if (isset($_POST["botonEnvio"])) {

    //recibir los datos
    $Name=$_POST["nombre"];
    $Apellido=$_POST["apellido"];
    $Sexo=$_POST["genero"];
    $Descripcion=$_POST["descripcion"];
    
    //crear una copia  de la clase bd
    $transaccion=new baseDatos();
    
    //crear una consulta sql apara agg datos
    $consultaSQL="INSERT INTO usuaios(Nombre, Apellido, Descripcion, Sexo) VALUES ('$Name','$Apellido','$Descripcion','$Sexo')";

    //Utilizar el metodon aggDatos()
    $transaccion->AgregarDatos($consultaSQL);
}

?>