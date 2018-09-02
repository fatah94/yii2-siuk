<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Umat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="umat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'agama')->dropDownList($model::agama()) ?>

    <?= $form->field($model, 'tempat_tgl_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList($model::jenis_kelamin()) ?>
    <?php
        if(isset($_GET) && isset($_GET['id'])){
            echo $form->field($model, 'hub_KRT')->dropDownList($model::hub_krt());      
        }else{
            echo Html::hiddenInput('Umat[hub_KRT]', 1);
        }
    ?>
    <?php //echo $form->field($model, 'hub_KRT')->dropDownList($model::hub_krt()) ?>

    <?= $form->field($model, 'suku')->textInput() ?>
    <b>Pendidikan</b>
    <?= $form->field($model, 'status_pendidikan')->dropDownList($model::status_pendidikan()) ?>

    <?= $form->field($model, 'jenjang_pendidikan')->dropDownList($model::jenjang_pendidikan($model->status_pendidikan)) ?>
    <?= $form->field($model, 'bidang_studi')->textInput() ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gol_darah')->dropDownList($model::gol_darah()) ?>

    <?= $form->field($model, 'status_kesehatan')->dropDownList($model::status_kesehatan()) ?>

    <?= $form->field($model, 'waktu_baptis')->dropDownList($model::waktu_baptis()) ?>

    <?= $form->field($model, 'tempat_tgl_baptis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_tgl_penguatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_kawin')->dropDownList($model::status_kawin()) ?>

    <?= $form->field($model, 'jabatan_sosial')->dropDownList($model::jabatan_sosial()) ?>

    <?= $form->field($model, 'tempat_tinggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lama_tinggal')->textInput() ?>

    <?= $form->field($model, 'status_gerejawi')->dropDownList($model::status_gerejawi()) ?>

    <?= $form->field($model, 'keterlibatan')->dropDownList($model::keterlibatan()) ?>

    <?= $form->field($model, 'liber_baptizatorium')->textInput() ?>

    <?= $form->field($model, 'notum')->dropDownList($model::notum()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(argument) {
        $('#umat-status_pendidikan').on('change', function(){
            var id = this.value;

            $.ajax({
                type: "POST",
                url: "/umat/getjenjangpendidikan",
                dataType: "json",
                data:'id='+id,
                success: function(result){
                    var data;
                    for(i in result){
                        data += "<option value='"+i+"'>"+result[i]+"</option>";
                    }
                    $("#umat-jenjang_pendidikan").html(data);
                }
            });
        });
    })
</script>