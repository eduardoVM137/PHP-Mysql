<?php  
 $Titulo=$_POST['titulo']; 
   $Descripcion=$_POST['descripcion'];
   
 $Fecha=$_POST['fecha']; 

    // if(isset($_POST['fecha'])){

    //     $Fecha=$_POST['fecha'];
    // }
    // if(isset($_POST['titulo'])){

    //     $Titulo=$_POST['titulo'];
    // }
    // if(isset($_POST['descripcion'])){

    //     $Descripcion=$_POST['descripcion'];
    // }


       require_once 'NTarea.php';
       $Tareas=new NTarea();
    // $Insertar=$Tareas->Insertar("hooa","hooa",'20-05-2023');
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