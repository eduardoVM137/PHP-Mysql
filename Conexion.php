
<?php 
class ConexionMysql{ 
private $conexion;
public function AbrirConexion(){
  //  $this->conexion=mysqli_connect('localhost','root','','prueba');
  
  $this->conexion = new mysqli('localhost','root','','prueba');
    if(!$this->conexion){
        die('Error de  coenxion: '.mysqli_connect_error());
    
    }

  

}
public function get_connection(){
    return $this->conexion;
}

public function CerrarConexion(){

    mysqli_close($this->conexion);

}



}
?>