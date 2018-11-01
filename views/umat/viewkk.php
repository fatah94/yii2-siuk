<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UmatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
// echo'<pre>';print_r($model::jenis_kelamin());die;
$this->title = "Keluarga $nama_kk";
$this->params['breadcrumbs'][] = ['label' => 'Data Umat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="umat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Input Data', ['create', 'id' => $_GET['id']], ['class' => 'btn btn-success']) ?>
    </p>


    <?= $this->render('detailViewKk', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
    ]) ?>

</div>
