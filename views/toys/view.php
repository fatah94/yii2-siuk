<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Toys */

$this->title = $model->toy;
$this->params['breadcrumbs'][] = ['label' => 'Data Toys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toys-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->toy_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->toy_id], [
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
            // 'toy_id',
            'toy',
        ],
    ]) ?>

</div>
