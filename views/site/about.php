<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Acerca de...';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
      Este es el proyecto para las unidades 5 y 6 de la materia de Programacion Web del Instituo Tecnologico de Tepic
    </p>
    <h2>Integrantes:</h2>
    <ul>
    		<li>Ernesto Antonio Especiano Parada</li>
    		<li>Armando Antonio Navarro Flores</li>
    		<li>Juan Jose Nolasco Meza</li>
    		<li>Ernesto Pacheco Morelos</li>
    </ul>

    <code><?= __FILE__ ?></code>
</div>
