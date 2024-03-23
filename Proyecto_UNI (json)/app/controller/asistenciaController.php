<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/app/model/conexion.php';
include $_SERVER['DOCUMENT_ROOT'] . '/app/model/asistenciaModel.php';


// Crear instancias de las clases
$db = new DatabaseConnection();
$model = new AsitenciaModel($db);
$controller = new AsistenciaController($model);

class AsistenciaController {
    private $model;

    public function __construct(AsistenciaModel $model) {
        $this->model = $model;
    }

    public function index() {
        $asistencias = $this->model->getAllaistencias();

        if (!empty($asistencias)) {
            foreach ($asistencias as $asistencia) {
                echo "ID: {$asistencia['asistencia']} - Hora: {$asistencia['hora']} - Actividad: {$asistencia['dia']}<br>";
            }
        } else {
            echo "No se encontraron resultados";
        }
    }
}
?>