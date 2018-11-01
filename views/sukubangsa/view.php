<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SukuBangsa */

$this->title = $model->id_suku;
$this->params['breadcrumbs'][] = ['label' => 'Suku Bangsas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suku-bangsa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_suku], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_suku], [
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
            // 'id_suku',
            'deskripsi_suku',
        ],
    ]) ?>

</div>
