<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GolonganDarah */

$this->title = $model->deskripsi_goldar;
$this->params['breadcrumbs'][] = ['label' => 'Data Golongan Darah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golongan-darah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_goldar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_goldar], [
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
            // 'id_goldar',
            'deskripsi_goldar',
        ],
    ]) ?>

</div>
