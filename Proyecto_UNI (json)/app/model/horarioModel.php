<?php
class HorarioModel {
   private $db;

   public function __construct(DatabaseConnection $db) {
       $this->db = $db;
   }

   public function getAllHorarios() {
       $conn = $this->db->connect();
       try{
        $sql = "SELECT * FROM horarios";
        $result = $conn->query($sql);
        $horarios = [];
 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $horarios[] = $row;
            }
        }
       }catch(Exception $e){
        echo "No se ha encontrado la tabla en la base de datos";
       }
       $conn->close();
       return $horarios;
   }

   public function insertarHorarios(){
    $conn = $this->db->connect();
    try {
        $sql="INSERT INTO `horarios`(`codHorario`, `semestre`, `dia`, `hora`, `codCurso`, `secCurso`, `teopra`, `codAula`, `tope`, `codDocente`, `estado`, `fecRegistrado`, `fecModificacion`) VALUES (' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ',' ')";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
        
    } catch (Exception $e) {
        echo "No se ha encontrado la tabla en la base de datos "; 
    }
   }
   public function editarHorario(){
    $conn = $this->db->connect();
    try {
        $sql="UPDATE `horarios` SET `semestre`=' ',`dia`=' ',`hora`=' ',`codCurso`=' ',`secCurso`=' ',`teopra`=' ',`codAula`=' ',`tope`=' ',`codDocente`=' ',`estado`=' ',`fecRegistrado`=' ',`fecModificacion`=' ' WHERE `codHorario`=' '";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
        
    } catch (Exception $e) {
        echo "No se ha encontrado la tabla en la base de datos "; 
    }
   }

   public function eliminarHorario(){
    $conn = $this->db->connect();
    try {
        $sql="DELETE FROM `horarios` WHERE codHorario=''";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
        
    } catch (Exception $e) {
        echo "No se ha encontrado la tabla en la base de datos "; 
    }
   }
}
?>