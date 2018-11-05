<?php

namespace app\controllers;

use Yii;
use app\models\Umat;
use app\models\UmatSearch;
use app\models\Lingkungan;
use app\models\LingkunganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LingkunganController implements the CRUD actions for Lingkungan model.
 */
class LingkunganController extends ControllerHelper
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
     * Lists all Lingkungan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LingkunganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lingkungan model.
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

    public function actionViewumat($id)
    {
        $searchModel = new UmatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, null, null, $id);

        return $this->render('viewumat', [
            'nama_lingkungan' => $this->findModel($id)['nama_lingkungan'],
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Lingkungan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lingkungan();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_lingkungan = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Lingkungan ' . $model->nama_lingkungan);
                return $this->redirect(['view', 'id' => $model->id_lingkungan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Lingkungan ' . $model->nama_lingkungan);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lingkungan model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Lingkungan ' . $model->nama_lingkungan);
                return $this->redirect(['view', 'id' => $model->id_lingkungan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Lingkungan ' . $model->nama_lingkungan);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lingkungan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $namalingkungan = $model->nama_lingkungan;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Lingkungan ' . $namalingkungan);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Lingkungan ' . $namalingkungan);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lingkungan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Lingkungan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lingkungan::findOne($id)) !== null) {
            return $model;
        }
        return null;
        // throw new NotFoundHttpException('The requested page does not exist.');
    }
}
