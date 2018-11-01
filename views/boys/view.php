<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Boys */

$this->title = $model->boy;
$this->params['breadcrumbs'][] = ['label' => 'Boys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="boys-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->boy_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->boy_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'boy_id',
            'boy',
            [
                'attribute' => 'toy_id',
                'value' => function ($data) {
                    return $data::getListToys($data->toy_id, TRUE);
                },
            ],            
        ],
    ]) ?>

</div>
