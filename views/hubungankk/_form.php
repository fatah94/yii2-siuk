<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HubunganKk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hubungan-kk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_hub_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_hub_kk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acuan')->checkbox(['label'=>'Acuan', 'value' => 1]); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
