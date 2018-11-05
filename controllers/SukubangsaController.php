<?php

namespace app\controllers;

use Yii;
use app\models\SukuBangsa;
use app\models\SukuBangsaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SukubangsaController implements the CRUD actions for SukuBangsa model.
 */
class SukubangsaController extends ControllerHelper
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
     * Lists all SukuBangsa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SukuBangsaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SukuBangsa model.
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
     * Creates a new SukuBangsa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SukuBangsa();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_suku = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Suku Bangsa ' . $model->deskripsi_suku);
                return $this->redirect(['view', 'id' => $model->id_suku]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Suku Bangsa ' . $model->deskripsi_suku);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SukuBangsa model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Suku Bangsa ' . $model->deskripsi_suku);
                return $this->redirect(['view', 'id' => $model->id_suku]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Suku Bangsa ' . $model->deskripsi_suku);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SukuBangsa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $suku = $model->deskripsi_suku;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Suku ' . $suku);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Suku ' . $suku);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the SukuBangsa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return SukuBangsa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SukuBangsa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
