<?php

namespace app\controllers;

use Yii;
use app\models\JabatanSosial;
use app\models\JabatanSosialSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JabatansosialController implements the CRUD actions for JabatanSosial model.
 */
class JabatansosialController extends ControllerHelper
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
     * Lists all JabatanSosial models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JabatanSosialSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JabatanSosial model.
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
     * Creates a new JabatanSosial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JabatanSosial();

        if ($model->load(Yii::$app->request->post())) {
            $model->id_jbt_sosial = $model::getNextId();

            if($model->save()){
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Jabatan Sosial ' . $model->deskripsi_jbt_sosial);
                return $this->redirect(['view', 'id' => $model->id_jbt_sosial]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Jabatan Sosial ' . $model->deskripsi_jbt_sosial);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JabatanSosial model.
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
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Jabatan Sosial ' . $model->deskripsi_jbt_sosial);
                return $this->redirect(['view', 'id' => $model->id_jbt_sosial]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Jabatan Sosial ' . $model->deskripsi_jbt_sosial);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JabatanSosial model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $jbtsosial = $model->deskripsi_jbt_sosial;
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Jabatan Sosial ' . $jbtsosial);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Jabatan Sosial ' . $jbtsosial);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the JabatanSosial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return JabatanSosial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = JabatanSosial::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
