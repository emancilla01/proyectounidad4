
<?php

// $sql = "INSERT INTO categorias (nombre) VALUES ('$nombre')";
// $sql = "DELETE FROM categorias WHERE id = $id";
// $sql = "UPDATE categorias SET nombre = '$nombre' WHERE id = $id";

// $sql = "SELECT id, nombre FROM categorias";                                 //obtenerCategorias 
// $sql = "SELECT id, nombre FROM categorias WHERE id = $id";                  //buscarPorID
// $sql = "SELECT id, nombre FROM categorias WHERE nombre LIKE '%$nombre%'";   //buscar


class db {
    public $servername = "localhost";
    public $username = "root";
    public $password = "Ch33rlos.";
    public $dbname = "ventas";
    public $conn = null;

    public function __construct(){
    }
    public function conectar(){
        try {
            $this->conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->dbname;port=3306",
                $this->username,
                $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }   
    public function desconectar(){
        $this->conn = null;
    }   
    public function insertar($sql){ 
        // $this->conn = $this->conectar();       
        try {
            // use exec() because no results are returned
            $this->conn->exec($sql);
            echo "Registro insertado correctamente";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }        
    }
    public function actualizar($sql){
        $this->conn = $this->conectar();
        try {
            // use exec() because no results are returned
            $this->conn->exec($sql);
            echo "Registro actualizado correctamente";
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
        
    }
    public function eliminar($sql){
        $this->conn = $this->conectar();
        try {           
            $this->conn->exec($sql);
            echo "Registro eliminado correctamente";
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }        
    }
    public function obtenerRegistros($sql){
        $this->conn = $this->conectar();
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $datos = $stmt->fetchAll();
            return $datos;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
        $this->desconectar($this->conn);
    }
    public function obtenerPorId($sql){
        $conn = $this->conectar();
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $datos = $stmt->fetchAll();
            return $datos;
        } catch(PDOException $e) {
            echo  "<br>" . $e->getMessage();
        }
        $this->desconectar($conn);
    }
    public function buscar($sql){
        $conn = $this->conectar();
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $datos = $stmt->fetchAll();
            return $datos;
        } catch(PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
        $this->desconectar($conn);
    }
}













// try {
//   $conn = new PDO(
//     "mysql:host=$servername;dbname=$dbname;port=3306",
//    $username,
//     $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "SELECT id, nombre FROM categorias";
//   $stmt = $conn->prepare($sql);
//   $stmt->execute();
//     // set the resulting array to associative
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $datos = $stmt->fetchAll();
    
//     // print_r($datos);

// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }
// $conn = null;

?>