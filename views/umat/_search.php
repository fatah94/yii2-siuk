<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UmatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="umat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_umat') ?>

    <?= $form->field($model, 'id_keuskupan') ?>

    <?= $form->field($model, 'id_paroki') ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <?= $form->field($model, 'id_lingkungan') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'tempat_nikah') ?>

    <?php // echo $form->field($model, 'tgl_nikah') ?>

    <?php // echo $form->field($model, 'liber_matrimonium') ?>

    <?php // echo $form->field($model, 'id_ekonomi') ?>

    <?php // echo $form->field($model, 'id_jenis_rt') ?>

    <?php // echo $form->field($model, 'np') ?>

    <?php // echo $form->field($model, 'no_urut') ?>

    <?php // echo $form->field($model, 'no_ktp') ?>

    <?php // echo $form->field($model, 'nama_anggota_rt') ?>

    <?php // echo $form->field($model, 'id_agama') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'jen_kel') ?>

    <?php // echo $form->field($model, 'id_hub_kk') ?>

    <?php // echo $form->field($model, 'id_suku') ?>

    <?php // echo $form->field($model, 'id_pendidikan') ?>

    <?php // echo $form->field($model, 'id_bidstudi') ?>

    <?php // echo $form->field($model, 'id_pekerjaan') ?>

    <?php // echo $form->field($model, 'id_goldar') ?>

    <?php // echo $form->field($model, 'id_sts_sehat') ?>

    <?php // echo $form->field($model, 'tgl_upd_sts_sehat') ?>

    <?php // echo $form->field($model, 'id_wkt_baptis') ?>

    <?php // echo $form->field($model, 'tempat_baptis') ?>

    <?php // echo $form->field($model, 'tgl_baptis') ?>

    <?php // echo $form->field($model, 'status_krisma') ?>

    <?php // echo $form->field($model, 'tempat_krisma') ?>

    <?php // echo $form->field($model, 'tgl_krisma') ?>

    <?php // echo $form->field($model, 'id_sts_kawin') ?>

    <?php // echo $form->field($model, 'id_jbt_sosial') ?>

    <?php // echo $form->field($model, 'tmp_tinggal') ?>

    <?php // echo $form->field($model, 'tahun_mulai_tinggal') ?>

    <?php // echo $form->field($model, 'status_komuni') ?>

    <?php // echo $form->field($model, 'id_sts_gerejawi') ?>

    <?php // echo $form->field($model, 'id_keterlibatan') ?>

    <?php // echo $form->field($model, 'liberbap') ?>

    <?php // echo $form->field($model, 'notum') ?>

    <?php // echo $form->field($model, 'tgl_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
