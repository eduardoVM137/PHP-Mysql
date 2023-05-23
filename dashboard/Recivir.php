<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $accion = $_POST['accion'];
<<<<<<< HEAD

=======
//modal-title.TXTO DEL MOLDAL ==INSERTAR
>>>>>>> 3d9b48d (comit funcional)
   if ($accion === 'insertar') {
       
   $archivo = 'C:\XAMMP\htdocs\dashboard\bd\Errores.txts';
   $texto = "Se ha insertado el registro con nombre.";
   file_put_contents($archivo, $texto);
   $contenido = file_get_contents($archivo);
   echo $contenido;
   file_put_contents($archivo, $texto);
   $contenido = file_get_contents($archivo);
   
   echo $contenido;
    
     } 
    if ($accion === 'editar') {
    
   


<<<<<<< HEAD
   $archivo = 'C:\XAMMP\htdocs\dashboard\bd\Errores.txts';
=======
   $archivo = 'C:\XAMPP\htdocs\dashboard\bd\Errores.txts';
>>>>>>> 3d9b48d (comit funcional)
   $texto = "Se ha editado el registro con nombre.";
   file_put_contents($archivo, $texto);
   $contenido = file_get_contents($archivo);
   echo $contenido;
   file_put_contents($archivo, $texto);
   $contenido = file_get_contents($archivo);
   
   echo $contenido;
   
}}


?>
