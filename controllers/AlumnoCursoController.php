<?php

namespace app\controllers;

use Yii;
use app\models\AlumnoCurso;
use app\models\AlumnoCursoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AlumnoCursoController implements the CRUD actions for AlumnoCurso model.
 */
class AlumnoCursoController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all AlumnoCurso models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlumnoCursoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AlumnoCurso model.
     * @param integer $Curso_idCurso
     * @param string $Usuarios_nombreUsuario
     * @return mixed
     */
    public function actionView($Curso_idCurso, $Usuarios_nombreUsuario)
    {
        return $this->render('view', [
            'model' => $this->findModel($Curso_idCurso, $Usuarios_nombreUsuario),
        ]);
    }

    /**
     * Creates a new AlumnoCurso model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AlumnoCurso();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_nombreUsuario' => $model->Usuarios_nombreUsuario]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AlumnoCurso model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Curso_idCurso
     * @param string $Usuarios_nombreUsuario
     * @return mixed
     */
    public function actionUpdate($Curso_idCurso, $Usuarios_nombreUsuario)
    {
        $model = $this->findModel($Curso_idCurso, $Usuarios_nombreUsuario);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_nombreUsuario' => $model->Usuarios_nombreUsuario]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AlumnoCurso model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Curso_idCurso
     * @param string $Usuarios_nombreUsuario
     * @return mixed
     */
    public function actionDelete($Curso_idCurso, $Usuarios_nombreUsuario)
    {
        $this->findModel($Curso_idCurso, $Usuarios_nombreUsuario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AlumnoCurso model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Curso_idCurso
     * @param string $Usuarios_nombreUsuario
     * @return AlumnoCurso the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Curso_idCurso, $Usuarios_nombreUsuario)
    {
        if (($model = AlumnoCurso::findOne(['Curso_idCurso' => $Curso_idCurso, 'Usuarios_nombreUsuario' => $Usuarios_nombreUsuario])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
