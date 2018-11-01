<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lingkungan */

$this->title = $model->nama_lingkungan;
$this->params['breadcrumbs'][] = ['label' => 'Data Lingkungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lingkungan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_lingkungan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_lingkungan], [
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
            // 'id_lingkungan',
            'nama_lingkungan',
            'lingk_pengurus',
            'lingk_kontak',
            [
                'attribute' => 'id_wilayah',
                'value' => function ($data) {
                    return $data::getListWilayah($data->id_wilayah, TRUE);
                },
            ],
        ],
    ]) ?>

</div>
