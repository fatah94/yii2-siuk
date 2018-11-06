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
            'id_umat',
            'keuskupan.nama_keuskupan',
            'paroki.nama_paroki',
            'wilayah.nama_wilayah',
            'lingkungan.nama_lingkungan',
            'alamat',
            'tempat_nikah',
            'tgl_nikah',
            'liber_matrimonium',
            'ekonomi.kriteria_ekonomi',
            'jenisrt.kriteria_rt',
            'np',
            'no_urut',
            'no_ktp',
            'nama_anggota_rt',
            'agama.nama_agama',
            'tempat_lahir',
            'tgl_lahir',
            [
                'attribute' => 'jen_kel',
                'value' => $model::getListJenKel($model->jen_kel),
            ],
            'hubkk.deskripsi_hub_kk',
            'suku.deskripsi_suku',
            'pendidikan.deskripsi_pendidikan',
            'bidangstudi.deskripsi_bidstudi',
            'pekerjaan.deskripsi_pekerjaan',
            'golongandarah.deskripsi_goldar',
            'statuskesehatan.deskripsi_sts_sehat',
            'tgl_upd_sts_sehat',
            'waktubaptis.deskripsi_wkt_baptis',
            'tempat_baptis',
            'tgl_baptis',
            'status_krisma',
            'tempat_krisma',
            'tgl_krisma',
            'statusperkawinan.deskripsi_sts_kawin',
            'jabatansosial.deskripsi_jbt_sosial',
            'tmp_tinggal',
            'tahun_mulai_tinggal',
            'status_komuni',
            'statusgerejawi.deskripsi_sts_gerejawi',
            'keterlibatan.deskripsi_keterlibatan',
            'liberbap',
            'notum',
            'tgl_update',
        ],
    ]) ?>

</div>
