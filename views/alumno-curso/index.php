<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnoCursoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumno Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumno-curso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Alumno Curso', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Curso_idCurso',
            'Usuarios_nombreUsuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
