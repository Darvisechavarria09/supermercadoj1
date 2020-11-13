<?php

class BaseDatosProductos{

    //atributos
    public $usuarioBD="root";
    public $passwordBD="";

    //constructor
    public function __construct(){}

    //metodos
    public function conectarBD(){
        try{
    
            $datosBD="mysql:host=localhost;dbname=tiendaproductos";
            $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);
        
        
        }catch(PDOException $error){
    
            echo($error->getMessage());
    
        }
    }

    public function agregarDatos($consultaSQL){

        //establecer una conexion
        $conexionBD=$this->conectarBD();
    
        //Preparar consulta
        $insertarDatos=$conexionBD->prepare($consultaSQL);
    
        //Ejecutar la consulta
        $resultado=$insertarDatos->execute();
    
        //verifico el resultado
        if($resultado){
            echo("Producto Agregado");
        }else{
            echo("Error");
        }
    
    
    }

    public function consultarDatos($consultaSQL){
        //establecer una conexion
        $conexionBD=$this->conectarBD();
    
        //Preparar consulta
        $consultarDatos=$conexionBD->prepare($consultaSQL);
    
        //Establecer metodo de consulta
        $consultarDatos-> setFetchMode(PDO::FETCH_ASSOC);
    
        //Ejecutar la operacion en la BD
        $consultarDatos->execute();
    
        //Retorne los datos consultados
        return($consultarDatos->fetchAll());
    
    
    }

    public function eliminarDatos($consultaSQL){
        //establecer una conexion
        $conexionBD=$this->conectarBD();
    
        //Preparar consulta
        $eliminarDatos=$conexionBD->prepare($consultaSQL);
    
        //Ejecutar la consulta
        $resultado=$eliminarDatos->execute();
    
        //verifico el resultado
        if($resultado){
            echo("Producto Eliminado");
        }else{
            echo("Error");
        }
    }

    public function editarDatos($consultaSQL){
        //establecer una conexion
        $conexionBD=$this->conectarBD();
    
        //Preparar consulta
        $editarDatos=$conexionBD->prepare($consultaSQL);
    
        //Ejecutar la consulta
        $resultado=$editarDatos->execute();
    
        //verifico el resultado
        if($resultado){
            echo("Producto Editado");
        }else{
            echo("Error");
        }
    }

}
?>