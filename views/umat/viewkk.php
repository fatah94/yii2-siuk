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

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_anggota_rt',
            [
                'attribute' => 'id_hub_kk',
                'value' => 'hubkk.deskripsi_hub_kk',
            ],            [
                'attribute' => 'id_agama',
                'value' => 'agama.nama_agama',
            ],
            [
                'attribute' => 'jen_kel',
                'value' => function ($data) {
                    return $data::getListJenKel($data->jen_kel, TRUE);
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view} &nbsp; {update} &nbsp; {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open">', $url, ['title' => Yii::t('app', 'View')]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil">', $url, ['title' => Yii::t('app', 'Update')]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash">', $url, [
                                    'title' => Yii::t('app', 'Delete'), 
                                    'aria-label' => Yii::t('app', 'Delete'),
                                    'data-pjax' => '0',
                                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this data?'),
                                    'data-method' => 'post',
                        ]);
                    }
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        $url ='view?id='.$model->id_umat;
                        return $url;
                    }else if ($action === 'update') {
                        $url ='update?id='.$model->id_umat;
                        return $url;
                    }else if ($action === 'delete') {
                        $url ='delete?id='.$model->id_umat;
                        return $url;
                    }
                }
            ],
        ],
    ]); ?>


</div>
