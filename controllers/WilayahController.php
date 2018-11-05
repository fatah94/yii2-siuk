<?php

namespace app\controllers;

use Yii;
use app\models\Wilayah;
use app\models\WilayahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WilayahController implements the CRUD actions for Wilayah model.
 */
class WilayahController extends ControllerHelper
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
     * Lists all Wilayah models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WilayahSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Wilayah model.
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
     * Creates a new Wilayah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Wilayah();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_wilayah = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Wilayah ' . $model->nama_wilayah);
                return $this->redirect(['view', 'id' => $model->id_wilayah]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Wilayah ' . $model->nama_wilayah);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Wilayah model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Wilayah ' . $model->nama_wilayah);
                return $this->redirect(['view', 'id' => $model->id_wilayah]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Wilayah ' . $model->nama_wilayah);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Wilayah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $namaWilayah = $model->nama_wilayah;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus ' . $namaWilayah);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus ' . $namaWilayah);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Wilayah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Wilayah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wilayah::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
