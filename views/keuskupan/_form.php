<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Keuskupan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="keuskupan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_keuskupan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_keuskupan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_keuskupan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
