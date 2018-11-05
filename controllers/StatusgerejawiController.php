<?php

namespace app\controllers;

use Yii;
use app\models\StatusGerejawi;
use app\models\StatusGerejawiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StatusgerejawiController implements the CRUD actions for StatusGerejawi model.
 */
class StatusgerejawiController extends ControllerHelper
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
     * Lists all StatusGerejawi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StatusGerejawiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StatusGerejawi model.
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
     * Creates a new StatusGerejawi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StatusGerejawi();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_sts_gerejawi = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Status Gerejawi ' . $model->deskripsi_sts_gerejawi);
                return $this->redirect(['view', 'id' => $model->id_sts_gerejawi]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Status Gerejawi ' . $model->deskripsi_sts_gerejawi);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StatusGerejawi model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Status Gerejawi ' . $model->deskripsi_sts_gerejawi);
                return $this->redirect(['view', 'id' => $model->id_sts_gerejawi]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Status Gerejawi ' . $model->deskripsi_sts_gerejawi);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StatusGerejawi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $stsgerejawi = $model->deskripsi_sts_gerejawi;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Status Gerejawi ' . $stsgerejawi);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Status Gerejawi ' . $stsgerejawi);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the StatusGerejawi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return StatusGerejawi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = StatusGerejawi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
