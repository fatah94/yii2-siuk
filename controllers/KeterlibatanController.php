<?php

namespace app\controllers;

use Yii;
use app\models\Keterlibatan;
use app\models\KeterlibatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeterlibatanController implements the CRUD actions for Keterlibatan model.
 */
class KeterlibatanController extends ControllerHelper
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
     * Lists all Keterlibatan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KeterlibatanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Keterlibatan model.
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
     * Creates a new Keterlibatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Keterlibatan();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_keterlibatan = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Keterlibatan ' . $model->deskripsi_keterlibatan);
                return $this->redirect(['view', 'id' => $model->id_keterlibatan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Keterlibatan ' . $model->deskripsi_keterlibatan);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Keterlibatan model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Keterlibatan ' . $model->deskripsi_keterlibatan);
                return $this->redirect(['view', 'id' => $model->id_keterlibatan]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Keterlibatan ' . $model->deskripsi_keterlibatan);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Keterlibatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $deskketerlibatan = $model->deskripsi_keterlibatan;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Keterlibatan ' . $deskketerlibatan);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Keterlibatan ' . $deskketerlibatan);
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Keterlibatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Keterlibatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Keterlibatan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
