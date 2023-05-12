
<?php 
  class  DTarea
{
    private int $_intIdTarea;
    public   string $_strTitulo,$_strDescripcion ,$Texto;
    public string $_dtFecha; 
   

   public function   Mostrar()
   {
    require_once 'Conexion.php';
       $conexion=new ConexionMysql();
       $conexion->AbrirConexion();
       $consulta=mysqli_query($conexion->get_connection(),'call spMostrar_Tareas()'); 
       $conexion->CerrarConexion();
        return $consulta;
   }

    public function Buscar($MiTexto)
      {
        require_once 'Conexion.php';
        $ClaseConexcion=new ConexionMysql();
        $ClaseConexcion->AbrirConexion();
        $MiConexcion=$ClaseConexcion->get_connection();
        // Preparar la sentencia SQL con el procedimiento almacenado y los parámetros
        $stmt = $MiConexcion->prepare("CALL spBuscar_Tarea(?)");
        // Vincular los parámetros a la sentencia preparada
        $stmt->bind_param("s", $MiTexto);
        // Ejecutar la consulta y almacenarla
        $stmt->execute();
        $result = $stmt->get_result();
        $ClaseConexcion->CerrarConexion();
        // $stmt->close();
        // $MiConexcion->close(); 

            
       return $result;
      }
    public function  Insertar(DTarea $Mitarea)
      {
        //Llamar a la Clase ConexcionMysql y crear una conexcion 
        require_once 'Conexion.php';
        $ClaseConexcion=new ConexionMysql();
        $ClaseConexcion->AbrirConexion();
        $MiConexcion=$ClaseConexcion->get_connection();          
        //Preparar nuestro procedimiento con la conexion creada
        $stmt = $MiConexcion->prepare("CALL spInsertar_Tarea(?, ?, ?)");
        // Vincular los parámetros a la sentencia preparada
        $stmt->bind_param("sss", $Mitarea->_strTitulo, $Mitarea->_strDescripcion, $Mitarea->_dtFecha);

        // Ejecutar la consulta
        $stmt->execute();
        $ClaseConexcion->CerrarConexion();
        return "Se inserto de forma Correcta";
      }


}

?>
<!-- try {
  $dsn= 'mysql:host=localhost;dbname=prueba';
  $pdo = new PDO($dsn, 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Error al conectarse a la base de datos: " . $e->getMessage();
  exit();
}
         
try {
  $stmt = $pdo->prepare("CALL spInsertar_Tarea(:_Titulo, :_Descripcion,:_Fecha)");
  $stmt->bindParam(':_Titulo', $Titulo, PDO::PARAM_STR);
  $stmt->bindParam(':_Descripcion', $Descripcion, PDO::PARAM_STR);
  $stmt->bindParam(':_Fecha', $Fecha, PDO::PARAM_STR); 
  $stmt->execute();
  
  // Resto del código...
} catch (PDOException $e) {
  echo "Error al ejecutar el procedimiento almacenado: " . $e->getMessage();
}
          -->






<!-- 
// require_once 'Conexion.php';
        // $conexion=new ConexionMysql();
        // $conexion->AbrirConexion();
        //  $consulta=mysqli_query($conexion->conexion,'call spInsertar_Tarea('.$Titulo.' , '.$Descripcion.' , 02-02-2023)'); 
        //   $conexion->CerrarConexion(); -->