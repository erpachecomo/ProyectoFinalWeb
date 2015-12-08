<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>


<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body>
<?php $this->beginBody() ?>


<div class="clima">
<h7>Clima en Tepic</h7>
<div id="TT_vujwLxdhYfdcA9IA3AujjjDDDWuA1dCFrYkY1cCoa1z"><a href="http://www.tutiempo.net">El clima en Tepic - Tu Portal Personal</a></div>
</div>

<div class="wrap">
    <?php
    NavBar::begin([

        'brandLabel' => 'Tu Portal Personal',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],

            ['label' => 'Acerca de...', 'url' => ['/site/about']],
            ['label' => 'Usuarios', 'url' => ['/usuario/index']],
            ['label' => 'Alumnos', 'url' => ['/alumno-curso/index']],
            ['label' => 'Cursos Actuales', 'url' => ['/imparte-curso/index']],
            ['label' => 'Cursos', 'url' => ['/curso/index']],
            ['label' => 'Tareas', 'url' => ['/tareas/index']],
            Yii::$app->user->isGuest ?
                ['label' => 'Acceso', 'url' => ['/site/login']] :
                [
                    'label' => 'Salir(' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>



<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_vujwLxdhYfdcA9IA3AujjjDDDWuA1dCFrYkY1cCoa1z"></script>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
