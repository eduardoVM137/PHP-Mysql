<?php

require_once 'DTarea.php';
$Tareas=new DTarea();
 class  NTarea{

public function Mostrar(){
    $Tareas=new DTarea();
    $Tarea=$Tareas->Mostrar();
    return  $Tarea;
}
public function Buscar($MiTexto ){
    $Tareas=new DTarea();
    return  $Tareas->Buscar($MiTexto);
}

public function Insertar($Titulo,$Descripcion,$Fecha){
    $Tareas=new DTarea();
    $Tareas->_strTitulo=$Titulo;
    $Tareas->_strDescripcion=$Descripcion;
    $Tareas->_dtFecha=$Fecha;
     $Tareas->Insertar($Tareas);
}
}

?>