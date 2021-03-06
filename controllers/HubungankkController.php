<?php

namespace app\controllers;

use Yii;
use app\models\HubunganKk;
use app\models\HubunganKkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HubungankkController implements the CRUD actions for HubunganKk model.
 */
class HubungankkController extends ControllerHelper
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
     * Lists all HubunganKk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HubunganKkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HubunganKk model.
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
     * Creates a new HubunganKk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HubunganKk();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_hub_kk = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Hubungan Kepala Keluarga ' . $model->deskripsi_hub_kk);
                return $this->redirect(['view', 'id' => $model->id_hub_kk]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Hubungan Kepala Keluarga ' . $model->deskripsi_hub_kk);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing HubunganKk model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Hubungan Kepala Keluarga ' . $model->deskripsi_hub_kk);
                return $this->redirect(['view', 'id' => $model->id_hub_kk]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Hubungan Kepala Keluarga ' . $model->deskripsi_hub_kk);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing HubunganKk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $hubkk = $model->deskripsi_hub_kk;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Hubungan KK ' . $hubkk);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Hubungan KK ' . $hubkk);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the HubunganKk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return HubunganKk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HubunganKk::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
