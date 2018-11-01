<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Agama */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_agama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
