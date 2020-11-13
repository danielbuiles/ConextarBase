<?php

class baseDatos{

    public $usuarioBD="root";
    public $passwordBD="";

    public function __construct (){

    }

    public function conectarBd (){

            try {
                $datosBD="mysql:host=localhost;dbname=tienda";
                $ConexionBD=new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
                return($ConexionBD);
            } catch (PDOException $error) {
                echo($error->getMessage());
            }
    }

    public function AgregarDatos($consultaSQL){
        //se debe establecer una conexion ala db
        $ConexionBD=$this->conectarBd();

        //preparar la consulta para insertar datos
        $agregarDatos=$ConexionBD->prepare($consultaSQL);

        //ajecutar la consulta
        $Resultado=$agregarDatos->execute();

        //validar la operacion
        if ($Resultado) {
            echo("Funcion Correcta");
        }
        else {
            echo("sin funcionar");
        }

    }

    public function BuscarDatos($consultaSQL){
        $ConexionBD=$this->conectarBd();

        $BuscarDatos=$ConexionBD->prepare($consultaSQL);

        $BuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $Resultado=$BuscarDatos->execute();

        //retorne los datos entregaddos
        return($BuscarDatos->fetchAll());
    }

    public function EliminarDatos($consultaSQL){
        $Conexion=$this->conectarBd();
        $EliminarDatos=$Conexion->prepare($consultaSQL);
        $Ejecucion=$EliminarDatos->execute();
        if ($Ejecucion) {
           echo("Datos Eliminados");
        }
        else {
            echo("Error al eliminar Datos");
        }
    }
}
?>