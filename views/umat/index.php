<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UmatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Umats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="umat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Umat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_umat',
            // 'id_keuskupan',
            // 'id_paroki',
            // 'id_wilayah',
            // 'id_lingkungan',
            //'alamat',
            //'tempat_nikah',
            //'tgl_nikah',
            //'liber_matrimonium',
            //'id_ekonomi',
            //'id_jenis_rt',
            //'np',
            //'no_urut',
            //'no_ktp',
            'nama_anggota_rt',
            [
                'attribute' => 'id_agama',
                'value' => function ($data) {
                    return $data::getListAgama($data->id_agama, TRUE);
                },
            ],
            //'tempat_lahir',
            //'tgl_lahir',
            [
                'attribute' => 'jen_kel',
                'value' => function ($data) {
                    return $data::getListJenKel($data->jen_kel, TRUE);
                },
            ],
            //'id_hub_kk',
            //'id_suku',
            //'id_pendidikan',
            //'id_bidstudi',
            //'id_pekerjaan',
            //'id_goldar',
            //'id_sts_sehat',
            //'tgl_upd_sts_sehat',
            //'id_wkt_baptis',
            //'tempat_baptis',
            //'tgl_baptis',
            //'status_krisma',
            //'tempat_krisma',
            //'tgl_krisma',
            //'id_sts_kawin',
            //'id_jbt_sosial',
            //'tmp_tinggal',
            //'tahun_mulai_tinggal',
            //'status_komuni',
            //'id_sts_gerejawi',
            //'id_keterlibatan',
            //'liberbap',
            //'notum',
            //'tgl_update',

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
                        $url ='viewkk?id='.$model->id_umat;
                        return $url;
                    }else if ($action === 'delete') {
                        $url ='deletekk?id='.$model->id_umat;
                        return $url;
                    }

                }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
