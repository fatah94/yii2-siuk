<?php

namespace app\controllers;

use Yii;
use app\models\Umat;
use app\models\UmatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UmatController implements the CRUD actions for Umat model.
 */
class UmatController extends ControllerHelper
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
     * Lists all Umat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UmatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'jenis_kelamin' => Umat::getListJenKel(),
        ]);
    }

    /**
     * Displays a single Umat model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model,
            'datakk' => $this->findModel(['no_urut'=> 1, 'np' => $model->np]),
        ]);
    }

    public function actionViewkk($id)
    {
        $searchModel = new UmatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id);
        $data = Umat::findOne(['no_urut'=> 1, 'np' => $id]);

        if(empty($data)){
            return $this->redirect(['index']);
        }
        return $this->render('viewkk', [
            'nama_kk' => $data['nama_anggota_rt'],
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Umat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Umat();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->tgl_update = date('Y-m-d H:i:s');
            $model->tahun_mulai_tinggal = substr($model->tahun_mulai_tinggal,0,4);
    
            if ($model->save()) {
                Yii::$app->session->setFlash('alert', 'Berhasil Menyimpan Data '  . $model->nama_anggota_rt);
                return $this->redirect(['viewkk', 'id' => $model->np]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Menyimpan Data '  . $model->nama_anggota_rt);
        }

        $datakk = '';
        if(isset($_GET['id'])){
            $model->np = (int)$_GET['id'];
            $datakk = $this->findModel(['no_urut'=> 1, 'np' => $model->np]);
        }

        return $this->render('create', [
            'model' => $model,
            'datakk' => $datakk,
        ]);
    }

    /**
     * Updates an existing Umat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            $model->tahun_mulai_tinggal = substr($model->tahun_mulai_tinggal,0,4);
            $model->tgl_update = date('Y-m-d H:i:s');
    
            if ($model->save()) {
                Yii::$app->session->setFlash('alert', 'Berhasil Memperbarui Data ' . $model->nama_anggota_rt);
                return $this->redirect(['view', 'id' => $model->id_umat]);
            }
            Yii::$app->session->setFlash('alert', 'Gagal Memperbarui Data '  . $model->nama_anggota_rt);
        }

        return $this->render('update', [
            'datakk' => $this->findModel(['no_urut'=> 1, 'np' => $model->np]),
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Umat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        
        if($model->delete()){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Umat ' . $model->nama_anggota_rt);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Umat ' . $model->nama_anggota_rt);
        }

        return $this->redirect(['viewkk', 'id' => $model->np]);
    }

    public function actionDeletekk($id)
    {
        $model = $this->findModel(['no_urut'=> 1, 'np' => $id]);

        if(Umat::deleteAll(['np' => $id])){
            Yii::$app->session->setFlash('alert', 'Berhasil Menghapus Data Umat Keluarga ' . $model->nama_anggota_rt);
        }else{
            Yii::$app->session->setFlash('alert', 'Gagal Menghapus Data Umat Keluarga ' . $model->nama_anggota_rt);
        }

        return $this->redirect(['index']);
    }
    /**
     * Finds the Umat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Umat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Umat::findOne($id)) !== null) {
            return $model;
        }
        return null;
        // throw new NotFoundHttpException('The requested page does not exist.');
    }

}
