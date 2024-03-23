<?php
class SemestreModel {
   private $db;

   public function __construct(DatabaseConnection $db) {
       $this->db = $db;
   }

   public function getAllSemestres() {
       $conn = $this->db->connect();
       try{
         $sql = "SELECT * FROM semestres";
         $result = $conn->query($sql);
         $semestre = [];

        if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
               $semestre[] = $row;
           }
        }
       }catch(Exception $e){
         echo "No se a encontrado la tabla en la base de datos";
       }
       
       $conn->close();
       return $semestre;
   }

   public function agregarSemestre(){
    $conn = $this->db->connect();
    try {
        $sql="INSERT INTO `semestres`(`id`, `semestre`, `fecInicio`, `fecFinal`, `estado`) VALUES (' ',' ',' ',' ',' ')";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
        
    } catch (Exception $e) {
        echo "No se ha encontrado la tabla en la base de datos "; 
    }
   }

   public function editarSemestre(){
    $conn = $this->db->connect();
    try {
        $sql="UPDATE `semestres` SET `id`=' ',`semestre`=' ',`fecInicio`=' ',`fecFinal`=' ',`estado`=' ' WHERE 1";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
        
    } catch (Exception $e) {
        echo "No se ha encontrado la tabla en la base de datos "; 
    }
   }

   public function eliminarSemestre(){
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