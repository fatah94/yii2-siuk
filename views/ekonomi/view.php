<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ekonomi */

$this->title = $model->kriteria_ekonomi;
$this->params['breadcrumbs'][] = ['label' => 'Data Ekonomi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekonomi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ekonomi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ekonomi], [
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
            // 'id_ekonomi',
            'kriteria_ekonomi',
            'deskripsi_ekonomi',
        ],
    ]) ?>

</div>
