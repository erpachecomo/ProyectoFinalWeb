<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnoCurso */

$this->title = $model->Curso_idCurso;
$this->params['breadcrumbs'][] = ['label' => 'Alumno Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumno-curso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_Usuario' => $model->Usuarios_Usuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_Usuario' => $model->Usuarios_Usuario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Curso_idCurso',
            'Usuarios_Usuario',
        ],
    ]) ?>

</div>
