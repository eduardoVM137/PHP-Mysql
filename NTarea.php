<?php

require_once 'DTarea.php';
$Tareas=new DTarea();
 class  NTarea{

public function Mostrar(){
    $Tareas=new DTarea();
    $Tarea=$Tareas->Mostrar();
    return  $Tarea;
}
public function Buscar($Mitexto ){
    $Tareas=new DTarea();
    return  $Tareas->Buscar($Mitexto);
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