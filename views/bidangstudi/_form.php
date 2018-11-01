<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BidangStudi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidang-studi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bidstudi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_bidstudi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
