<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AlumnoCurso */

$this->title = 'Create Alumno Curso';
$this->params['breadcrumbs'][] = ['label' => 'Alumno Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumno-curso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
