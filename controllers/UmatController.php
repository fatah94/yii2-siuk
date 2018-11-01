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
class UmatController extends Controller
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
            'datakk' => $this->getKepalaKeluarga($model['id_umat'], $model['id_keluarga']),
        ]);
    }

    public function actionViewkk($id)
    {
        $searchModel = new UmatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $id);

        return $this->render('viewkk', [
            'nama_kk' => $this->findModel($id)['nama_anggota_rt'],
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
                $model->id_keluarga = (int)$_GET['id'];
            }
    
            if ($model->save()) {
                $idkk = ($model->id_keluarga==0) ? $model->id_umat : $model->id_keluarga;
                return $this->redirect(['viewkk', 'id' => $id_keluarga]);
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
            return $this->redirect(['view', 'id' => $model->id_umat]);
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
        $models = Umat::find()->where(['id_umat' => $id])->orWhere(['id_keluarga'=> $id])->all();

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

    protected function getKepalaKeluarga($id_umat, $id_keluarga)
    {
        $searchid = ($id_keluarga==0) ? $id_umat : $id_keluarga;
        return $this->findModel($searchid);
    }
}
