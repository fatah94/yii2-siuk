<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Umat */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Umat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Keluarga '.$datakk['nama'], 'url' => ['viewkk', 'id' => $datakk['id']]];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="umat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Perbarui', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this data?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            [
                'attribute' => 'agama',
                'value' => $model::agama($model->agama, TRUE),
            ],
            'tempat_tgl_lahir',
            [
                'attribute' => 'jenis_kelamin',
                'value' => $model::jenis_kelamin($model->jenis_kelamin, TRUE),
            ],
            [
                'attribute' => 'hub_KRT',
                'value' => $model::hub_krt($model->hub_KRT, TRUE),
            ],
            'suku',
            [
                'attribute' => 'status_pendidikan',
                'value' => $model::status_pendidikan($model->status_pendidikan, TRUE),
            ],
            [
                'attribute' => 'jenjang_pendidikan',
                'value' => $model::jenjang_pendidikan($model->jenjang_pendidikan, TRUE, TRUE),
            ],
            'bidang_studi',
            'pekerjaan',
            [
                'attribute' => 'gol_darah',
                'value' => $model::gol_darah($model->gol_darah, TRUE),
            ],
            [
                'attribute' => 'status_kesehatan',
                'value' => $model::status_kesehatan($model->status_kesehatan, TRUE),
            ],
            [
                'attribute' => 'waktu_baptis',
                'value' => $model::waktu_baptis($model->waktu_baptis, TRUE),
            ],
            'tempat_tgl_baptis',
            'tempat_tgl_penguatan',
            [
                'attribute' => 'status_kawin',
                'value' => $model::status_kawin($model->status_kawin, TRUE),
            ],
            [
                'attribute' => 'jabatan_sosial',
                'value' => $model::jabatan_sosial($model->jabatan_sosial, TRUE),
            ],
            'tempat_tinggal',
            'lama_tinggal',
            [
                'attribute' => 'status_gerejawi',
                'value' => $model::status_gerejawi($model->status_gerejawi, TRUE),
            ],
            [
                'attribute' => 'keterlibatan',
                'value' => $model::keterlibatan($model->keterlibatan, TRUE),
            ],

            'liber_baptizatorium',
            [
                'attribute' => 'notum',
                'value' => $model::notum($model->notum, TRUE),
            ],
        ],
    ]) ?>

</div>
