<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JabatanSosial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jabatan-sosial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_jbt_sosial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_jbt_sosial')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
