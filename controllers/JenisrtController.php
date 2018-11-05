<?php

namespace app\controllers;

use Yii;
use app\models\JenisRt;
use app\models\JenisRtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JenisrtController implements the CRUD actions for JenisRt model.
 */
class JenisrtController extends ControllerHelper
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
     * Lists all JenisRt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JenisRtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JenisRt model.
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
     * Creates a new JenisRt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JenisRt();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_jenis_rt = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Jenis RT ' . $model->kriteria_rt);
                return $this->redirect(['view', 'id' => $model->id_jenis_rt]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Jenis RT ' . $model->kriteria_rt);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JenisRt model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Jenis RT ' . $model->kriteria_rt);
                return $this->redirect(['view', 'id' => $model->id_jenis_rt]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Jenis RT ' . $model->kriteria_rt);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JenisRt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $kriteriart = $model->kriteria_rt;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Jenis RT ' . $kriteriart);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Jenis RT ' . $kriteriart);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the JenisRt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return JenisRt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JenisRt::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
