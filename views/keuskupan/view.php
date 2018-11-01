<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Keuskupan */

$this->title = $model->id_keuskupan;
$this->params['breadcrumbs'][] = ['label' => 'Keuskupans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keuskupan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_keuskupan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_keuskupan], [
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
            'id_keuskupan',
            'nama_keuskupan',
            'alamat_keuskupan',
        ],
    ]) ?>

</div>
