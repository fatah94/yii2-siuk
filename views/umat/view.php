<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Umat */

$this->title = $model->nama_anggota_rt;
$this->params['breadcrumbs'][] = ['label' => 'Data Umat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Keluarga '.$datakk['nama_anggota_rt'], 'url' => ['viewkk', 'id' => $datakk['np']]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="umat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_umat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_umat], [
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
            [
                'attribute' => 'id_keuskupan',
                'value' => $model::getListKeuskupan($model->id_keuskupan),
            ],
            [
                'attribute' => 'id_paroki',
                'value' => $model::getListParoki($model->id_paroki),
            ],
            [
                'attribute' => 'id_wilayah',
                'value' => $model::getListWilayah($model->id_wilayah),
            ],
            [
                'attribute' => 'id_lingkungan',
                'value' => $model::getListLingkungan($model->id_lingkungan),
            ],
            'alamat',
            'tempat_nikah',
            'tgl_nikah',
            'liber_matrimonium',
            [
                'attribute' => 'id_ekonomi',
                'value' => $model::getListEkonomi($model->id_ekonomi),
            ],
            [
                'attribute' => 'id_jenis_rt',
                'value' => $model::getListJenisRt($model->id_jenis_rt),
            ],
            'np',
            'no_urut',
            'no_ktp',
            'nama_anggota_rt',
            [
                'attribute' => 'id_agama',
                'value' => $model::getListAgama($model->id_agama),
            ],
            'tempat_lahir',
            'tgl_lahir',
            [
                'attribute' => 'jen_kel',
                'value' => $model::getListJenKel($model->jen_kel),
            ],
            [
                'attribute' => 'id_hub_kk',
                'value' => $model::getListHubKk($model->id_hub_kk),
            ],
            [
                'attribute' => 'id_suku',
                'value' => $model::getListSuku($model->id_suku),
            ],
            [
                'attribute' => 'id_pendidikan',
                'value' => $model::getListPendidikan($model->id_pendidikan),
            ],
            [
                'attribute' => 'id_bidstudi',
                'value' => $model::getListBidStudi($model->id_bidstudi),
            ],
            [
                'attribute' => 'id_pekerjaan',
                'value' => $model::getListPekerjaan($model->id_pekerjaan),
            ],
            [
                'attribute' => 'id_goldar',
                'value' => $model::getListGolDar($model->id_goldar),
            ],
            [
                'attribute' => 'id_sts_sehat',
                'value' => $model::getListStsSehat($model->id_sts_sehat),
            ],
            'tgl_upd_sts_sehat',
            [
                'attribute' => 'id_wkt_baptis',
                'value' => $model::getListWktBaptis($model->id_wkt_baptis),
            ],
            'tempat_baptis',
            'tgl_baptis',
            'status_krisma',
            'tempat_krisma',
            'tgl_krisma',
            [
                'attribute' => 'id_sts_kawin',
                'value' => $model::getListStsKawin($model->id_sts_kawin),
            ],
            [
                'attribute' => 'id_jbt_sosial',
                'value' => $model::getListJbtSosial($model->id_jbt_sosial),
            ],
            'tmp_tinggal',
            'tahun_mulai_tinggal',
            'status_komuni',
            [
                'attribute' => 'id_sts_gerejawi',
                'value' => $model::getListStsGerejawi($model->id_sts_gerejawi),
            ],
            [
                'attribute' => 'id_keterlibatan',
                'value' => $model::getListKeterlibatan($model->id_keterlibatan),
            ],
            'liberbap',
            'notum',
            'tgl_update',
        ],
    ]) ?>

</div>
