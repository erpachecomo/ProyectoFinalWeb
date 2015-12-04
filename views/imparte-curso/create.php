<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImparteCurso */

$this->title = 'Create Imparte Curso';
$this->params['breadcrumbs'][] = ['label' => 'Imparte Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imparte-curso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
