<?php

namespace app\controllers;

use Yii;
use app\models\StatusPerkawinan;
use app\models\StatusPerkawinanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StatusperkawinanController implements the CRUD actions for StatusPerkawinan model.
 */
class StatusperkawinanController extends ControllerHelper
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
     * Lists all StatusPerkawinan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StatusPerkawinanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StatusPerkawinan model.
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
     * Creates a new StatusPerkawinan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StatusPerkawinan();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_sts_kawin = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Status Kawin ' . $model->deskripsi_sts_kawin);
                return $this->redirect(['view', 'id' => $model->id_sts_kawin]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Status Kawin ' . $model->deskripsi_sts_kawin);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StatusPerkawinan model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Status Kawin ' . $model->deskripsi_sts_kawin);
                return $this->redirect(['view', 'id' => $model->id_sts_kawin]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Status Kawin ' . $model->deskripsi_sts_kawin);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StatusPerkawinan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $stskawin = $model->deskripsi_sts_kawin;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Status Perkawinan ' . $stskawin);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Status Perkawinan ' . $stskawin);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the StatusPerkawinan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return StatusPerkawinan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StatusPerkawinan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
