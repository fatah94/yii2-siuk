<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UmatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_anggota_rt',
            [
                'attribute' => 'id_hub_kk',
                'value' => function ($data) {
                    return $data::getListHubKk($data->id_hub_kk, TRUE);
                },
            ],            [
                'attribute' => 'id_agama',
                'value' => function ($data) {
                    return $data::getListAgama($data->id_agama, TRUE);
                },
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
