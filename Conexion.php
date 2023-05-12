
<?php 
class ConexionMysql{ 
public $conexion;
public function AbrirConexion(){
    $this->conexion=mysqli_connect('localhost','root','','prueba');
    if(!$this->conexion){
        die('Error de  coenxion: '.mysqli_connect_error());
    
    }

}
public function get_connection(){
    return $this->conexion;
}
public function AbrirConexionParametrizada(){
    try {
        $dsn= 'mysql:host=localhost;dbname=prueba';
        $pdo = new PDO($dsn, 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } 
    catch (PDOException $e) {
      echo "Error al conectarse a la base de datos: " . $e->getMessage();
      exit();
    }


}
public function CerrarConexion(){

    mysqli_close($this->conexion);

}



}
?>