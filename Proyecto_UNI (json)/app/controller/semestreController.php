<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/app/model/conexion.php';
include $_SERVER['DOCUMENT_ROOT'] . '/app/model/semestreModel.php';


// Crear instancias de las clases
$db = new DatabaseConnection();
$model = new SemestreModel($db);
$controller = new SemestreController($model);

class SemestreController {
    private $model;

    public function __construct(SemestreModel $model) {
        $this->model = $model;
    }

    public function index() {
        $semestres = $this->model->getAllsemestres();

        if (!empty($semestres)) {
            foreach ($semestres as $semestre) {
                echo "ID: {$semestre['id']} - Semestre: {$semestre['semestre']} - FechaInicio: {$semestre['fecInicio']} - Fechafinal: {$semestre['fecFinal']}<br>";
            }
        } else {
            echo "No se encontraron resultados";
        }
    }
}
?>