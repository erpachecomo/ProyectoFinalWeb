<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImparteCursoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imparte Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imparte-curso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Imparte Curso', ['create'], ['class' => 'btn btn-primary']) ?>
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
