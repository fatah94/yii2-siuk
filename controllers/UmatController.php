<?php

namespace app\controllers;

use Yii;
use app\models\Umat;
use app\models\UmatSearch;
use app\controllers\ControllerHelper;
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
            'datakk' => $this->getKepalaKeluarga($model['id'], $model['idkk']),
        ]);
    }

    public function actionViewkk($id)
    {
        $searchModel = new UmatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id);

        return $this->render('viewkk', [
            'nama_kk' => $this->findModel($id)['nama'],
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
     * Updates an existing Umat model.
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
     * Deletes an existing Umat model.
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
        $models = Umat::find()->where("id=$id")->orWhere("idkk=$id")->all();

        foreach ($models as $model) {
            $model->delete();
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
            $result = Umat::jenjang_pendidikan($_POST['id']);
            return json_encode($result);            
        }
    }
}
