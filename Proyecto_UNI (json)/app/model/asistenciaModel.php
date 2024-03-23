<?php
class AsistenciaModel {
   private $db;

   public function __construct(DatabaseConnection $db) {
       $this->db = $db;
   }

   public function getAllAsistencias() {
       $conn = $this->db->connect();
       try {
        $sql = "SELECT * FROM asistencias";
        $result = $conn->query($sql);
        $asistencia = [];
 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $asistencia[] = $row;
            }
        }
       } catch (Excepton $e) {
        echo "No se ha encontrado la tabla en la base de datos";
       }
       
       $conn->close();
       return $asistencia;
   }

   public function agregarAsistencia(){
    $conn = $this->db->connect();
    try{
        $sql="INSERT INTO asistencias () VALUES '$,$,$' ";
        $result = $conn->query($sql);
        $conn->close();
        return $result;

    }catch(Execption $e){
        echo "No se ha encontrado la tabla en la base de datos";

    }

   }

   public function editarAsistencia(){
    $conn = $this->db->connect();
    try {
        $sql="UPDATE `semestres` SET `semestre`=' ',`fecInicio`=' ',`fecFinal`=' ',`estado`=' ' WHERE `id`=' '";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
        
    } catch (Exception $e) {
        echo "No se ha encontrado la tabla en la base de datos "; 
    }
   }

   public function eliminarAsistencia(){
    $conn = $this->db->connect();
    try {
        $sql="DELETE FROM `semestres` WHERE id=''";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
        
    } catch (Exception $e) {
        echo "No se ha encontrado la tabla en la base de datos "; 
    }
   }
}
?>