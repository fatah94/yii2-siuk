<?php

namespace app\controllers;

use Yii;
use app\models\Ekonomi;
use app\models\EkonomiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EkonomiController implements the CRUD actions for Ekonomi model.
 */
class EkonomiController extends ControllerHelper
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
     * Lists all Ekonomi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EkonomiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ekonomi model.
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
     * Creates a new Ekonomi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ekonomi();
        
        if ($model->load(Yii::$app->request->post())) {
            $model->id_ekonomi = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Ekonomi ' . $model->kriteria_ekonomi);
                return $this->redirect(['view', 'id' => $model->id_ekonomi]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Ekonomi ' . $model->kriteria_ekonomi);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ekonomi model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Ekonomi ' . $model->kriteria_ekonomi);
                return $this->redirect(['view', 'id' => $model->id_ekonomi]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Ekonomi ' . $model->kriteria_ekonomi);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ekonomi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $kriteriaekonomi = $model->kriteria_ekonomi;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Kriteria Ekonomi ' . $kriteriaekonomi);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Kriteria Ekonomi ' . $kriteriaekonomi);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ekonomi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Ekonomi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ekonomi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
