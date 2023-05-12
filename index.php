<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <?php
        $MiTexto="DEscripcion";
require_once 'NTarea.php';
$Tareas=new NTarea(); 
$Buscar=$Tareas->Buscar($MiTexto); 
echo "<table border=1>";
echo "<tr><th>ID Tarea</th> <th>Titulo</th> <th>Descripcion</th></tr>"; 
       while ($fila=mysqli_fetch_assoc($Buscar)) {
           echo "<tr>";
           echo "<td>".$fila['idTarea']."</td>";
           echo "<td>".$fila['Titulo']."</td>";
           echo "<td>".$fila['Descripcion']."</td>"; 
           echo "</tr>";
       }
       echo "</table>";

        ?>
 
 <select id="opciones" name="opciones"> 
    <?php

require_once 'NTarea.php';
$Tareas=new NTarea(); 
$Buscar=    $Tareas->Mostrar();  
echo "<tr><th>ID Tarea</th> <th>Titulo</th> <th>Descripcion</th></tr>"; 
       while ($fila=mysqli_fetch_assoc($Buscar)) {
        echo "<option value=".$fila['Descripcion'].">".$fila['Descripcion']."</option>"; 
       }


    // Iterar sobre los datos del arreglo y generar las opciones del select
    foreach ($opciones as $valor => $etiqueta) {
        echo "<option value='$valor'>$etiqueta</option>";



    }
    ?>
</select>

    <p>
    <?php  



       require_once 'NTarea.php';
        $Tareas=new NTarea();
        $Buscar=    $Tareas->Mostrar();  
        echo "<table border=1>";
        echo "<tr><th>ID Tarea</th> <th>Titulo</th> <th>Descripcion</th></tr>"; 
               while ($fila=mysqli_fetch_assoc($Buscar)) {
                   echo "<tr>";
                   echo "<td>".$fila['idTarea']."</td>";
                   echo "<td>".$fila['Titulo']."</td>";
                   echo "<td>".$fila['Descripcion']."</td>"; 
                   echo "</tr>";
               }
               echo "</table>";



               
        ?>
     
    <p> 
</body>

</html>