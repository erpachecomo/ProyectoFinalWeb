<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnoCurso */

$this->title = 'Update Alumno Curso: ' . ' ' . $model->Curso_idCurso;
$this->params['breadcrumbs'][] = ['label' => 'Alumno Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Curso_idCurso, 'url' => ['view', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_Usuario' => $model->Usuarios_Usuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alumno-curso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
