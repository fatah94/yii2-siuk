<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Paroki */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paroki-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_paroki')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_paroki')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
