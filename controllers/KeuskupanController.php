<?php

namespace app\controllers;

use Yii;
use app\models\Keuskupan;
use app\models\KeuskupanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeuskupanController implements the CRUD actions for Keuskupan model.
 */
class KeuskupanController extends ControllerHelper
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Keuskupan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KeuskupanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Keuskupan model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Keuskupan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Keuskupan();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_keuskupan = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Keuskupan ' . $model->nama_keuskupan);
                return $this->redirect(['view', 'id' => $model->id_keuskupan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Keuskupan ' . $model->nama_keuskupan);
        }
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Keuskupan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Keuskupan ' . $model->nama_keuskupan);
                return $this->redirect(['view', 'id' => $model->id_keuskupan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Keuskupan ' . $model->nama_keuskupan);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Keuskupan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $namakeuskupan = $model->nama_keuskupan;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Keuskupan ' . $namakeuskupan);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Keuskupan ' . $namakeuskupan);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Keuskupan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Keuskupan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Keuskupan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
