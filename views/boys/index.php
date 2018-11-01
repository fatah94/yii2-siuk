<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BoysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Boys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boys-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Boys', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'boy_id',
            'boy',
            [
                'attribute' => 'toy_id',
                'value' => function ($data) {
                    return $data::getListToys($data->toy_id, TRUE);
                },
            ],  
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
