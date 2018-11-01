<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SukuBangsa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suku-bangsa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deskripsi_suku')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
