<?php

namespace app\controllers;

use Yii;
use app\models\GolonganDarah;
use app\models\GolonganDarahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GolongandarahController implements the CRUD actions for GolonganDarah model.
 */
class GolongandarahController extends ControllerHelper
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
     * Lists all GolonganDarah models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GolonganDarahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GolonganDarah model.
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
     * Creates a new GolonganDarah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GolonganDarah();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_goldar = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Golongan Darah ' . $model->deskripsi_goldar);
                return $this->redirect(['view', 'id' => $model->id_goldar]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Golongan Darah ' . $model->deskripsi_goldar);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing GolonganDarah model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Golongan Darah ' . $model->deskripsi_goldar);
                return $this->redirect(['view', 'id' => $model->id_goldar]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Golongan Darah ' . $model->deskripsi_goldar);
        }


        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GolonganDarah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $goldar = $model->deskripsi_goldar;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Golongan Darah ' . $goldar);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Golongan Darah ' . $goldar);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the GolonganDarah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return GolonganDarah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GolonganDarah::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
