
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
       $consulta=mysqli_query($conexion->conexion,'Select * from tarea'); 
       $conexion->CerrarConexion();
        return $consulta;
   }

    public function   Buscar( $Mitexto)
    {


                  
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "prueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Definir los parámetros
 
// Preparar la sentencia SQL con el procedimiento almacenado y los parámetros
$stmt = $conn->prepare("CALL spBuscar_Tarea(?)");

// Vincular los parámetros a la sentencia preparada
$stmt->bind_param("s", $Mitexto);
// Ejecutar la consulta
$stmt->execute();

// Obtener el resultado de la consulta
$result = $stmt->get_result();



        // require_once 'Conexion.php';
        //   $conexion=new ConexionMysql();
        //   $conexion->AbrirConexion();
        //   $consulta=mysqli_query($conexion->conexion,'call spBuscar_Tarea('.$MiBuscar.')'); 
        //   $conexion->CerrarConexion();
          return $result;
    }
      public function  Insertar(DTarea $Mitarea)
      {
      
                  
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "prueba";
        
        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
                $stmt = $conn->prepare("CALL spInsertar_Tarea(?, ?, ?)");

                // Vincular los parámetros a la sentencia preparada
                $stmt->bind_param("sss", $Mitarea->_strTitulo, $Mitarea->_strDescripcion, $Mitarea->_dtFecha);

                // Ejecutar la consulta
                $stmt->execute();

                // Cerrar la conexión y liberar recursos
                $stmt->close();
                $conn->close();
           
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