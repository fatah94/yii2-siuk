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

            // 'id',
            'nama',
            [
                'attribute' => 'agama',
                'value' => function ($data) {
                    return $data::agama($data->agama, TRUE);
                },
            ],
            'tempat_tgl_lahir',
            [
                'attribute' => 'jenis_kelamin',
                'value' => function ($data) {
                    return $data::jenis_kelamin($data->jenis_kelamin, TRUE);
                },
            ],
            [
                'attribute' => 'hub_KRT',
                'value' => function ($data) {
                    return $data::hub_krt($data->hub_KRT, TRUE);
                },
            ],
            // 'hub_KRT',
            //'suku',
            //'pendidikan',
            //'bidang_studi',
            //'pekerjaan',
            //'gol_darah',
            //'status_kesehatan',
            //'waktu_baptis',
            //'tempat_tgl_baptis',
            //'tempat_tgl_penguatan',
            //'status_kawin',
            //'jabatan_sosial',
            //'tempat_tinggal',
            //'lama_tinggal',
            //'status_gerejawi',
            //'keterlibatan',
            //'liber_baptizatorium',
            //'notum',

            // ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view} &nbsp; {update} &nbsp; {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('Lihat', $url, [
                                    'title' => Yii::t('app', 'Lihat'), 'class' => 'btn btn-success',
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('Perbarui', $url, [
                                    'title' => Yii::t('app', 'Perbarui'), 'class' => 'btn btn-primary',
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('Hapus', $url, [
                                    'title' => Yii::t('app', 'Hapus'), 
                                    'class' => 'btn btn-danger',
                                    'aria-label' => Yii::t('app', 'Hapus'),
                                    'data-pjax' => '0',
                                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this data?'),
                                    'data-method' => 'post',
                        ]);
                    }
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        $url ='view?id='.$model->id;
                        return $url;
                    }else if ($action === 'update') {
                        $url ='update?id='.$model->id;
                        return $url;
                    }else if ($action === 'delete') {
                        $url ='delete?id='.$model->id;
                        return $url;
                    }
                  }
            ],
        ],
    ]); ?>
</div>
