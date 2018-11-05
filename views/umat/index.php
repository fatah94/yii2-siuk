<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UmatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Data Umat';
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

            'nama_anggota_rt',
            [
                'attribute' => 'id_agama',
                'value' => function ($data) {
                    return $data::getListAgama($data->id_agama, TRUE);
                },
            ],
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'jen_kel',
                'value' => function ($data) {
                    return $data::getListJenKel($data->jen_kel, TRUE);
                },
                'filter' => Html::activeDropDownList($searchModel, 'jen_kel', $jenis_kelamin ,['class'=>'form-control', 'prompt'=>'Pilih Jenis Kelamin']),
            ],
            
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view} &nbsp; {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open">', $url, ['title' => Yii::t('app', 'View')]);
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
