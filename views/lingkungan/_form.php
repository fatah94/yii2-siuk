<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lingkungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lingkungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lingkungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingk_pengurus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lingk_kontak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_wilayah')->dropDownList($model::getListWilayah(), ['prompt'=>'Pilih Wilayah']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
