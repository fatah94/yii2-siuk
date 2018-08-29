<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Umat */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Data Umat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Keluarga '.$datakk['nama'], 'url' => ['viewkk?id='.$datakk['id']]];
$this->params['breadcrumbs'][] = $this->title;

// print_r($datakk);die;
?>
<div class="umat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'nama',
            [
                'attribute' => 'agama',
                'value' => $model::agama($model->agama),
            ],
            'tempat_tgl_lahir',
            [
                'attribute' => 'jenis_kelamin',
                'value' => $model::jenis_kelamin($model->jenis_kelamin),
            ],
            [
                'attribute' => 'hub_KRT',
                'value' => $model::hub_krt($model->hub_KRT),
            ],
            'suku',
            [
                'attribute' => 'status_pendidikan',
                'value' => $model::status_pendidikan($model->status_pendidikan),
            ],
            [
                'attribute' => 'jenjang_pendidikan',
                'value' => $model::jenjang_pendidikan($model->jenjang_pendidikan, TRUE),
            ],
            'bidang_studi',
            'pekerjaan',
            [
                'attribute' => 'gol_darah',
                'value' => $model::gol_darah($model->gol_darah),
            ],
            [
                'attribute' => 'status_kesehatan',
                'value' => $model::status_kesehatan($model->status_kesehatan),
            ],
            [
                'attribute' => 'waktu_baptis',
                'value' => $model::waktu_baptis($model->waktu_baptis),
            ],
            'tempat_tgl_baptis',
            'tempat_tgl_penguatan',
            [
                'attribute' => 'status_kawin',
                'value' => $model::status_kawin($model->status_kawin),
            ],
            [
                'attribute' => 'jabatan_sosial',
                'value' => $model::jabatan_sosial($model->jabatan_sosial),
            ],
            'tempat_tinggal',
            'lama_tinggal',
            [
                'attribute' => 'status_gerejawi',
                'value' => $model::status_gerejawi($model->status_gerejawi),
            ],
            [
                'attribute' => 'keterlibatan',
                'value' => $model::keterlibatan($model->keterlibatan),
            ],

            'liber_baptizatorium',
            [
                'attribute' => 'notum',
                'value' => $model::notum($model->notum),
            ],
        ],
    ]) ?>

</div>
