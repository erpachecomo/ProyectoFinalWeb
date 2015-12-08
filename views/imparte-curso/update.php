<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImparteCurso */

$this->title = 'Update Imparte Curso: ' . ' ' . $model->Curso_idCurso;
$this->params['breadcrumbs'][] = ['label' => 'Imparte Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Curso_idCurso, 'url' => ['view', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_nombreUsuario' => $model->Usuarios_nombreUsuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="imparte-curso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
