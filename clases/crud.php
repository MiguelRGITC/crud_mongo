<?php

class Crud extends Conexion {
    public function mostrarDatos(){
        try {
            $conexion = parent::conectar();
            $coleccion= $conexion->vehiculos;
            $datos = $coleccion->find();
            return $datos;
             
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerDocumento($id){
        try {
            $conexion = parent::conectar();
            $coleccion= $conexion->vehiculos;
            $datos= $coleccion->findOne(
                array('_id' => new MongoDB\BSON\ObjectId($id))
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarDatos($datos){
        try {
            $conexion = parent::conectar();
            $coleccion= $conexion->vehiculos;
            $respuesta=$coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function eliminar($id){
        try {
            $conexion = parent::conectar();
            $coleccion= $conexion->vehiculos;
            $respuesta=$coleccion->deleteOne(
                array("_id" => new MongoDB\BSON\ObjectId($id))
            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizar($id, $datos){
        try {
            $conexion = parent::conectar();
            $coleccion= $conexion->vehiculos;
            $respuesta=$coleccion->updateOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)],
                ['$set'=> $datos]
            );
                return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
