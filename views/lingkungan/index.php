<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LingkunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Lingkungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lingkungan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lingkungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_lingkungan',
            [
                'attribute' => 'nama_lingkungan',
                'value' => function ($model, $key, $index, $column) {
                    return Html::a($model->nama_lingkungan, ['/lingkungan/viewumat', 'id'=> $model->id_lingkungan], 
                    ['title' => 'Lihat Data Umat Di ' . $model->nama_lingkungan,]);
                },
                'format' => 'raw'
            ],
            'lingk_pengurus',
            'lingk_kontak',
            [
                'attribute' => 'id_wilayah',
                'value' => 'wilayah.nama_wilayah',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
