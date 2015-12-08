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
 	<img src="http://es.downloadicons.net/sites/default/files/icono-de-administrador-de-24881.png">
    <br>
    <br>
    <p>

    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=tareas/index">Tareas</a>
     
    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=curso/index">Cursos</a>
    
    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=imparte-curso/index">Imparte Cursos</a>
   
    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=alumno-curso/index">Alumno Cursos</a>

    <a class="btn btn-lg btn-primary" href="http://localhost/index.php?r=usuario/index">Usuarios</a>
    
    </p>
    
    
   

</div>
