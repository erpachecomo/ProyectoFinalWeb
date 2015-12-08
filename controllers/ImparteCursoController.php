<?php

namespace app\controllers;

use Yii;
use app\models\ImparteCurso;
use app\models\ImparteCursoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImparteCursoController implements the CRUD actions for ImparteCurso model.
 */
class ImparteCursoController extends Controller
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
     * Lists all ImparteCurso models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImparteCursoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ImparteCurso model.
     * @param integer $Curso_idCurso
     * @param integer $Usuarios_Usuario
     * @return mixed
     */
    public function actionView($Curso_idCurso, $Usuarios_Usuario)
    {
        return $this->render('view', [
            'model' => $this->findModel($Curso_idCurso, $Usuarios_Usuario),
        ]);
    }

    /**
     * Creates a new ImparteCurso model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ImparteCurso();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_Usuario' => $model->Usuarios_Usuario]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ImparteCurso model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Curso_idCurso
     * @param integer $Usuarios_Usuario
     * @return mixed
     */
    public function actionUpdate($Curso_idCurso, $Usuarios_Usuario)
    {
        $model = $this->findModel($Curso_idCurso, $Usuarios_Usuario);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Curso_idCurso' => $model->Curso_idCurso, 'Usuarios_Usuario' => $model->Usuarios_Usuario]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ImparteCurso model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Curso_idCurso
     * @param integer $Usuarios_Usuario
     * @return mixed
     */
    public function actionDelete($Curso_idCurso, $Usuarios_Usuario)
    {
        $this->findModel($Curso_idCurso, $Usuarios_Usuario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ImparteCurso model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Curso_idCurso
     * @param integer $Usuarios_Usuario
     * @return ImparteCurso the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Curso_idCurso, $Usuarios_Usuario)
    {
        if (($model = ImparteCurso::findOne(['Curso_idCurso' => $Curso_idCurso, 'Usuarios_Usuario' => $Usuarios_Usuario])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
