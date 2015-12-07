<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;


class SiteController extends Controller
{
    public function behaviors()
    {
        return [
        'access' => [
            'class' => AccessControl::className(),
            'only' => ['logout', 'admin','maestro','estudiante'],
            'rules' => [
                [
                    //El administrador tiene permisos sobre las siguientes acciones
                    'actions' => ['logout', 'admin'],
                    //Esta propiedad establece que tiene permisos
                    'allow' => true,
                    //Usuarios autenticados, el signo ? es para invitados
                    'roles' => ['@'],
                    //Este método nos permite crear un filtro sobre la identidad del usuario
                    //y así establecer si tiene permisos o n
                    'matchCallback' => function ($rule, $action) {
                        //Llamada al método que comprueba si es un administrador
                        return User::isUserAdmin(Yii::$app->user->identity->username);
                    },
                ],

                [
                    //El administrador tiene permisos sobre las siguientes acciones
                    'actions' => ['logout', 'maestro'],
                    //Esta propiedad establece que tiene permisos
                    'allow' => true,
                    //Usuarios autenticados, el signo ? es para invitados
                    'roles' => ['@'],
                    //Este método nos permite crear un filtro sobre la identidad del usuario
                    //y así establecer si tiene permisos o n
                    'matchCallback' => function ($rule, $action) {
                        //Llamada al método que comprueba si es un administrador
                        return User::isUserMaestro(Yii::$app->user->identity->username);
                    },
                ],

                [
                   //Los usuarios simples tienen permisos sobre las siguientes acciones
                   'actions' => ['logout', 'estudiante'],
                   //Esta propiedad establece que tiene permisos
                   'allow' => true,
                   //Usuarios autenticados, el signo ? es para invitados
                   'roles' => ['@'],
                   //Este método nos permite crear un filtro sobre la identidad del usuario
                   //y así establecer si tiene permisos o no
                   'matchCallback' => function ($rule, $action) {
                      //Llamada al método que comprueba si es un usuario simple
                      return User::isUserEstudiante(Yii::$app->user->identity->username);
                  },
               ],
            ],
        ],
 //Controla el modo en que se accede a las acciones, en este ejemplo a la acción logout
 //sólo se puede acceder a través del método post
        'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
                'logout' => ['post'],
            ],
        ],
    ];

    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionAdmin()
    {
        return $this->render('admin');
    }
    public function actionEstudiante()
    {
        return $this->render('estudiante');
    } 
    public function actionMaestro()
    {
        return $this->render('maestro');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
    if (!\Yii::$app->user->isGuest) {
 if (User::isUserAdmin(Yii::$app->user->identity->username))

{
 return $this->redirect(["site/admin"]);
}
elseif(User::isUserMaestro(Yii::$app->user->identity->username))
{
 return $this->redirect(["site/maestro"]);
}
else
{
 return $this->redirect(["site/estudiante"]);
}
     }
     $model = new LoginForm();
     if ($model->load(Yii::$app->request->post()) && $model->login()) {
 if (User::isUserAdmin(Yii::$app->user->identity->username))

{
 return $this->redirect(["site/admin"]);
}
elseif(User::isUserMaestro(Yii::$app->user->identity->username))
{
 return $this->redirect(["site/maestro"]);
}
else
{
 return $this->redirect(["site/estudiante"]);
}
     } else {
         return $this->render('login', [
             'model' => $model,
         ]);
     }

    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
