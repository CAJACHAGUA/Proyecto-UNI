<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/app/model/conexion.php';
include $_SERVER['DOCUMENT_ROOT'] . '/app/model/horarioModel.php';


// Crear instancias de las clases
$db = new DatabaseConnection();
$model = new HorarioModel($db);
$controller = new HorarioController($model);

class HorarioController {
    private $model;

    public function __construct(HorarioModel $model) {
        $this->model = $model;
    }

    public function index() {
        $horarios = $this->model->getAllHorarios();

        if (!empty($horarios)) {
            foreach ($horarios as $horario) {
                echo "Semestre: {$horario['semestre']} - Dia: {$horario['dia']} - Hora: {$horario['hora']}<br>";
            }
        } else {
            echo "No se encontraron resultados";
        }
    }
    public function agregarHorario($a, $e) {
        $resultado = $this->model->insertarhorario($a, $e);

        if ($resultado) {
            echo "Practicante agregado correctamente";
        } else {
            echo "Error al agregar practicante";
        }
    }
}
?>