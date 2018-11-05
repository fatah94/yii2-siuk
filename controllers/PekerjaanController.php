<?php

namespace app\controllers;

use Yii;
use app\models\Pekerjaan;
use app\models\PekerjaanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PekerjaanController implements the CRUD actions for Pekerjaan model.
 */
class PekerjaanController extends ControllerHelper
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
     * Lists all Pekerjaan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PekerjaanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pekerjaan model.
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
     * Creates a new Pekerjaan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pekerjaan();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_pekerjaan = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Pekerjaan ' . $model->deskripsi_pekerjaan);
                return $this->redirect(['view', 'id' => $model->id_pekerjaan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Pekerjaan ' . $model->deskripsi_pekerjaan);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pekerjaan model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Pekerjaan ' . $model->deskripsi_pekerjaan);
                return $this->redirect(['view', 'id' => $model->id_pekerjaan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Pekerjaan ' . $model->deskripsi_pekerjaan);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pekerjaan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $pekerjaan = $model->deskripsi_pekerjaan;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Pekerjaan ' . $pekerjaan);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Pekerjaan ' . $pekerjaan);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pekerjaan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Pekerjaan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pekerjaan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
