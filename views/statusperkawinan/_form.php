<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPerkawinan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-perkawinan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sts_kawin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_sts_kawin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_sts_kawin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
