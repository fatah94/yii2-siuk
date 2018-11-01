<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WilayahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wilayah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <?= $form->field($model, 'nama_wilayah') ?>

    <?= $form->field($model, 'wil_pengurus') ?>

    <?= $form->field($model, 'wil_kontak') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
