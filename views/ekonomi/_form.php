<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ekonomi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ekonomi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ekonomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kriteria_ekonomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_ekonomi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
