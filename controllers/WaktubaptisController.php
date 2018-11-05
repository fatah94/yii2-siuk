<?php

namespace app\controllers;

use Yii;
use app\models\WaktuBaptis;
use app\models\WaktuBaptisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WaktubaptisController implements the CRUD actions for WaktuBaptis model.
 */
class WaktubaptisController extends ControllerHelper
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
     * Lists all WaktuBaptis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WaktuBaptisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WaktuBaptis model.
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
     * Creates a new WaktuBaptis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WaktuBaptis();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_wkt_baptis = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Waktu Baptis ' . $model->deskripsi_wkt_baptis);
                return $this->redirect(['view', 'id' => $model->id_wkt_baptis]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Waktu Baptis ' . $model->deskripsi_wkt_baptis);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WaktuBaptis model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Waktu Baptis ' . $model->deskripsi_wkt_baptis);
                return $this->redirect(['view', 'id' => $model->id_wkt_baptis]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Waktu Baptis ' . $model->deskripsi_wkt_baptis);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WaktuBaptis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $wktbaptis = $model->deskripsi_wkt_baptis;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Waktu Baptis ' . $wktbaptis);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Waktu Baptis ' . $wktbaptis);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the WaktuBaptis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return WaktuBaptis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WaktuBaptis::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
