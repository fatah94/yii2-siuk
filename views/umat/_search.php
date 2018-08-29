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
    ]); ?>

    <?php // echo $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'agama')->dropDownList($model::agama()) ?>

    <?php // echo $form->field($model, 'tempat_tgl_lahir') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'hub_KRT') ?>

    <?php // echo $form->field($model, 'suku') ?>

    <?php // echo $form->field($model, 'pendidikan') ?>

    <?php // echo $form->field($model, 'bidang_studi') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'gol_darah') ?>

    <?php // echo $form->field($model, 'status_kesehatan') ?>

    <?php // echo $form->field($model, 'waktu_baptis') ?>

    <?php // echo $form->field($model, 'tempat_tgl_baptis') ?>

    <?php // echo $form->field($model, 'tempat_tgl_penguatan') ?>

    <?php // echo $form->field($model, 'status_kawin') ?>

    <?php // echo $form->field($model, 'jabatan_sosial') ?>

    <?php // echo $form->field($model, 'tempat_tinggal') ?>

    <?php // echo $form->field($model, 'lama_tinggal') ?>

    <?php // echo $form->field($model, 'status_gerejawi') ?>

    <?php // echo $form->field($model, 'keterlibatan') ?>

    <?php // echo $form->field($model, 'liber_baptizatorium') ?>

    <?php // echo $form->field($model, 'notum') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <br>
</div>
