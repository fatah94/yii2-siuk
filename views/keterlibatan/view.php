<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Keterlibatan */

$this->title = $model->deskripsi_keterlibatan;
$this->params['breadcrumbs'][] = ['label' => 'Data Keterlibatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keterlibatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_keterlibatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_keterlibatan], [
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
            // 'id_keterlibatan',
            'deskripsi_keterlibatan',
        ],
    ]) ?>

</div>
