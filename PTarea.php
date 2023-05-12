<!-- {<?php  //Metodo que Recibe la descripcion y buscar el registro

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el valor seleccionado del select
    $Descripcion = $_POST['opciones'];
  
  
         require_once 'NTarea.php';
         $Tareas=new NTarea();
      echo "desc: ".$Descripcion;
          $Buscar=    $Tareas->Buscar($Descripcion);  
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
  
                }  ?>