<?php

namespace app\controllers;

use Yii;
use app\models\StatusKesehatan;
use app\models\StatusKesehatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StatuskesehatanController implements the CRUD actions for StatusKesehatan model.
 */
class StatuskesehatanController extends ControllerHelper
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
     * Lists all StatusKesehatan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StatusKesehatanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StatusKesehatan model.
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
     * Creates a new StatusKesehatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StatusKesehatan();

        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Status Kesehatan ' . $model->deskripsi_sts_sehat);
                return $this->redirect(['view', 'id' => $model->id_sts_sehat]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Status Kesehatan ' . $model->deskripsi_sts_sehat);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StatusKesehatan model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Status Kesehatan ' . $model->deskripsi_sts_sehat);
                return $this->redirect(['view', 'id' => $model->id_sts_sehat]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Status Kesehatan ' . $model->deskripsi_sts_sehat);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StatusKesehatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $stssehat = $model->deskripsi_sts_sehat;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Status Kesehatan ' . $stssehat);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Status Kesehatan ' . $stssehat);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the StatusKesehatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return StatusKesehatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StatusKesehatan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
