<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPerkawinan */

$this->title = $model->deskripsi_sts_kawin;
$this->params['breadcrumbs'][] = ['label' => 'Data Status Perkawinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-perkawinan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sts_kawin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sts_kawin], [
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
            // 'id_sts_kawin',
            'deskripsi_sts_kawin',
            'keterangan_sts_kawin',
        ],
    ]) ?>

</div>
