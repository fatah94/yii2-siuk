<?php

namespace app\controllers;

use Yii;
use app\models\Pendidikan;
use app\models\PendidikanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PendidikanController implements the CRUD actions for Pendidikan model.
 */
class PendidikanController extends ControllerHelper
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
     * Lists all Pendidikan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PendidikanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pendidikan model.
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
     * Creates a new Pendidikan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pendidikan();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_pendidikan = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Pendidikan ' . $model->deskripsi_pendidikan);
                return $this->redirect(['view', 'id' => $model->id_pendidikan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Pendidikan ' . $model->deskripsi_pendidikan);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pendidikan model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Pendidikan ' . $model->deskripsi_pendidikan);
                return $this->redirect(['view', 'id' => $model->id_pendidikan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Pendidikan ' . $model->deskripsi_pendidikan);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pendidikan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $pendidikan = $model->deskripsi_pendidikan;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Pendidikan ' . $pendidikan);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Pendidikan ' . $pendidikan);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pendidikan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Pendidikan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pendidikan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
