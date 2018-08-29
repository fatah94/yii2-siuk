<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UmatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
// echo'<pre>';print_r($model::jenis_kelamin());die;
$this->title = 'Data Umat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="umat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Input Data', ['create'], ['class' => 'btn btn-success']) ?>
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
                    return $data::agama($data->agama);
                },
            ],
            'tempat_tgl_lahir',
            [
                'attribute' => 'jenis_kelamin',
                'value' => function ($data) {
                    return $data::jenis_kelamin($data->jenis_kelamin);
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
                'template' => '{view} &nbsp; {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('Lihat', $url, [
                                    'title' => Yii::t('app', 'Lihat'), 'class' => 'btn btn-success',
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('Hapus', $url, [
                                    'title' => Yii::t('app', 'Hapus'), 'class' => 'btn btn-danger'
                        ]);
                    }
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'view') {
                        $url ='viewkk?id='.$model->id;
                        return $url;
                    }else if ($action === 'delete') {
                        $url ='deletekk?id='.$model->id;
                        return $url;
                    }

                }
            ],
        ],
    ]); ?>
</div>
