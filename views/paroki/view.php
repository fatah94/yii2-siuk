<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Paroki */

$this->title = $model->nama_paroki;
$this->params['breadcrumbs'][] = ['label' => 'Data Paroki', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paroki-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_paroki], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_paroki], [
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
            // 'id_paroki',
            'nama_paroki',
            'alamat_paroki',
        ],
    ]) ?>

</div>
