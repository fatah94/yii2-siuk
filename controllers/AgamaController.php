<?php

namespace app\controllers;

use Yii;
use app\models\Agama;
use app\models\AgamaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AgamaController implements the CRUD actions for Agama model.
 */
class AgamaController extends ControllerHelper
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
     * Lists all Agama models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AgamaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Agama model.
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
     * Creates a new Agama model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Agama();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_agama = $model::getNextId();
            
            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Agama ' . $model->nama_agama);
                return $this->redirect(['view', 'id' => $model->id_agama]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Agama ' . $model->nama_agama);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Agama model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Agama ' . $model->nama_agama);
                return $this->redirect(['view', 'id' => $model->id_agama]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Agama ' . $model->nama_agama);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Agama model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $namaagama = $model->nama_agama;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Agama ' . $namaagama);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Agama ' . $namaagama);
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Agama model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Agama the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Agama::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
