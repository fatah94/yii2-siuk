<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LingkunganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lingkungan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_lingkungan') ?>

    <?= $form->field($model, 'nama_lingkungan') ?>

    <?= $form->field($model, 'lingk_pengurus') ?>

    <?= $form->field($model, 'lingk_kontak') ?>

    <?= $form->field($model, 'id_wilayah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
