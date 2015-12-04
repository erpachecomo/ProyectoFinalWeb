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


<div class="wrap">
    <?php
    NavBar::begin([
<<<<<<< HEAD
        'brandLabel' => 'TuPortalPersonal',
=======
        'brandLabel' => 'Tu Portal Personal',
>>>>>>> 1821e491707b8d2e60e20b424248c1906340ed34
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
<<<<<<< HEAD
            ['label' => 'Acerca de...', 'url' => ['/site/about']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
            ['label' => 'Tareas', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Acceso', 'url' => ['/site/login']] :
                [
                    'label' => 'Salir(' . Yii::$app->user->identity->username . ')',
=======
            ['label' => 'Acerca de ', 'url' => ['/site/about']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Iniciar sesión', 'url' => ['/site/login']] :
                [
                    'label' => 'Salir (' . Yii::$app->user->identity->username . ')',
>>>>>>> 1821e491707b8d2e60e20b424248c1906340ed34
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
<div id="TT_vujwLxdhYfdcA9IA3AujjjDDDWuA1dCFrYkY1cCoa1z"><a href="http://www.tutiempo.net">El clima en Tepic - Tu Portal Personal</a></div>
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
