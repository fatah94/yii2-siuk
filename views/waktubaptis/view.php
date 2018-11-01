<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WaktuBaptis */

$this->title = $model->deskripsi_wkt_baptis;
$this->params['breadcrumbs'][] = ['label' => 'Data Waktu Baptis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="waktu-baptis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_wkt_baptis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_wkt_baptis], [
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
            // 'id_wkt_baptis',
            'deskripsi_wkt_baptis',
        ],
    ]) ?>

</div>
