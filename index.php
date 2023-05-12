<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <form method="POST" action="PTarea.php">
        <select  id="id_opciones"  name="opciones">
            

            <?php
                //Buscar Registro desde el select
                require_once 'NTarea.php';
                $Tareas=new NTarea(); 
                $Buscar=    $Tareas->Mostrar(); 
                    while ($fila=mysqli_fetch_assoc($Buscar)) 
                        {
                            echo "<option value=".$fila['Descripcion'].">".$fila['Descripcion']."</option>"; 
                        }

                
            ?>
                
        <input type="submit" value="Guardar">
        </select>

    </form>
  
    <?php   //Mostrar Registros

       require_once 'NTarea.php';
        $Tareas=new NTarea();

        // $Tareas->Insertar("Mi Nuevo Titulo "," Mi Nueva Descripcion","12-05-2023");
        // $Tareas->Insertar("CRUD Para Programacion WEB"," Desarrollarlo en PHP y MyQsl","12-05-2023");

        $Buscar=$Tareas->Mostrar();  
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
     
</body>

</html>