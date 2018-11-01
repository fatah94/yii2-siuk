<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HubunganKk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hubungan-kk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deskripsi_hub_kk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
