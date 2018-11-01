<?php

namespace app\controllers;

use Yii;
use app\models\Umatold;
use app\models\UmatoldSearch;
use app\controllers\ControllerHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UmatController implements the CRUD actions for Umatold model.
 */
class UmatoldController extends ControllerHelper
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
     * Lists all Umatold models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UmatoldSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Umatold model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
            'model' => $model,
            'datakk' => $this->getKepalaKeluarga($model['id'], $model['idkk']),
        ]);
    }

    public function actionViewkk($id)
    {
        $searchModel = new UmatoldSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id);

        return $this->render('viewkk', [
            'nama_kk' => $this->findModel($id)['nama'],
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Umatold model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Umatold();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());

            if(isset($_GET['id'])){
                $model->idkk = (int)$_GET['id'];
            }
    
            if ($model->save()) {
                $idkk = ($model->idkk==0) ? $model->id : $model->idkk;
                return $this->redirect(['viewkk', 'id' => $idkk]);
            }
        }

        $datakk = '';
        if(isset($_GET['id'])){
            $datakk = $this->findModel((int)$_GET['id']);
        }

        return $this->render('create', [
            'model' => $model,
            'datakk' => $datakk,
        ]);
    }

    /**
     * Updates an existing Umatold model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Umatold model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionDeletekk($id)
    {
        $models = Umatold::find()->where("id=$id")->orWhere("idkk=$id")->all();

        foreach ($models as $model) {
            $model->delete();
        }

        return $this->redirect(['index']);
    }
    /**
     * Finds the Umatold model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Umatold the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Umatold::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function getKepalaKeluarga($id, $idkk)
    {
        $searchid = ($idkk==0) ? $id : $idkk;
        return $this->findModel($searchid);
    }

    public function actionGetjenjangpendidikan()
    {
        if(Yii::$app->request->isPost){
            $result = Umatold::jenjang_pendidikan($_POST['id']);
            return json_encode($result);            
        }
    }
}
