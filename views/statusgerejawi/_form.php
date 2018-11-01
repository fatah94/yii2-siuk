<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatusGerejawi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-gerejawi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deskripsi_sts_gerejawi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
