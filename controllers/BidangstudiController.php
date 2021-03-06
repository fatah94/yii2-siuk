<?php

namespace app\controllers;

use Yii;
use app\models\BidangStudi;
use app\models\BidangStudiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BidangstudiController implements the CRUD actions for BidangStudi model.
 */
class BidangstudiController extends ControllerHelper
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
     * Lists all BidangStudi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BidangStudiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BidangStudi model.
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
     * Creates a new BidangStudi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BidangStudi();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_bidstudi = $model::getNextId();
            
            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Bidang Studi ' . $model->deskripsi_bidstudi);
                return $this->redirect(['view', 'id' => $model->id_bidstudi]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Bidang Studi ' . $model->deskripsi_bidstudi);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BidangStudi model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Bidang Studi ' . $model->deskripsi_bidstudi);
                return $this->redirect(['view', 'id' => $model->id_bidstudi]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Bidang Studi ' . $model->deskripsi_bidstudi);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BidangStudi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $bidstudi = $model->deskripsi_bidstudi;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Bidang Studi ' . $bidstudi);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Bidang Studi ' . $bidstudi);
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the BidangStudi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return BidangStudi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BidangStudi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
