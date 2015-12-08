<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Administrador';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-admin">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul>    		
    </ul>

    <br>

    <p>
    <div class="boton-tareas">
    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=site%2Flogin">Tareas</a>
    </div>

    <div class="boton-curso">
    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=site%2Flogin">Cursos</a>
    </div>

    <div class="boton-imparte">
    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=site%2Flogin">Imparte Curso</a>
    </div>

    <div class="boton-Alumno">
    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=site%2Flogin">Alumno Curso</a>
    </div>
    </p>
    
    
   

</div>
