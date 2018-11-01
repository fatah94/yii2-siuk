<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use nex\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Umat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="umat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_keuskupan')->dropDownList($model::getListKeuskupan(), ['prompt'=>'Pilih Keuskupan']) ?>

    <?= $form->field($model, 'id_paroki')->dropDownList($model::getListParoki(), ['prompt'=>'Pilih Paroki']) ?>

    <?= $form->field($model, 'id_wilayah')->dropDownList($model::getListWilayah(), ['prompt'=>'Pilih Wilayah']) ?>

    <?= $form->field($model, 'id_lingkungan')->dropDownList($model::getListLingkungan(), ['prompt'=>'Pilih Lingkungan']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_nikah')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'tgl_nikah')->widget(
            DatePicker::className(), [
        'value' => $model->tgl_nikah,
        'placeholder' => 'Format : YYYY-MM-D',
        'clientOptions' => [
            'format' => 'YYYY-MM-D',
        ],
    ]);
    ?>

    <?= $form->field($model, 'liber_matrimonium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_ekonomi')->dropDownList($model::getListEkonomi(), ['prompt'=>'Pilih Ekonomi']) ?>

    <?= $form->field($model, 'id_jenis_rt')->dropDownList($model::getListJenisRt(), ['prompt'=>'Pilih Jenis RT']) ?>

    <?= $form->field($model, 'np')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_urut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_anggota_rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_agama')->dropDownList($model::getListAgama(), ['prompt'=>'Pilih Agama']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'tgl_lahir')->widget(
            DatePicker::className(), [
        'value' => $model->tgl_lahir,
        'placeholder' => 'Format : YYYY-MM-D',
        'clientOptions' => [
            'format' => 'YYYY-MM-D',
        ],
    ]);
    ?>

    <?= $form->field($model, 'jen_kel')->dropDownList($model::getListJenKel(), ['prompt'=>'Pilih Jenis Kelamin']) ?>

    <?= $form->field($model, 'id_hub_kk')->dropDownList($model::getListHubKk(), ['prompt'=>'Pilih Jenis Hubungan Kepala Keluarga']) ?>

    <?= $form->field($model, 'id_suku')->dropDownList($model::getListSuku(), ['prompt'=>'Pilih Suku']) ?>

    <?= $form->field($model, 'id_pendidikan')->dropDownList($model::getListPendidikan(), ['prompt'=>'Pilih Pendidikan']) ?>

    <?= $form->field($model, 'id_bidstudi')->dropDownList($model::getListBidStudi(), ['prompt'=>'Pilih Bidang Studi']) ?>

    <?= $form->field($model, 'id_pekerjaan')->dropDownList($model::getListPekerjaan(), ['prompt'=>'Pilih Pekerjaan']) ?>

    <?= $form->field($model, 'id_goldar')->dropDownList($model::getListGolDar(), ['prompt'=>'Pilih Golongan Darah']) ?>

    <?= $form->field($model, 'id_sts_sehat')->dropDownList($model::getListStsSehat(), ['prompt'=>'Pilih Status Kesehatan']) ?>

    <?=
    $form->field($model, 'tgl_upd_sts_sehat')->widget(
            DatePicker::className(), [
        'value' => $model->tgl_upd_sts_sehat,
        'placeholder' => 'Format : YYYY-MM-D',
        'clientOptions' => [
            'format' => 'YYYY-MM-D',
        ],
    ]);
    ?>

    <?= $form->field($model, 'id_wkt_baptis')->dropDownList($model::getListWktBaptis(), ['prompt'=>'Pilih Waktu Baptis']) ?>

    <?= $form->field($model, 'tempat_baptis')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'tgl_baptis')->widget(
            DatePicker::className(), [
        'value' => $model->tgl_baptis,
        'placeholder' => 'Format : YYYY-MM-D',
        'clientOptions' => [
            'format' => 'YYYY-MM-D',
        ],
    ]);
    ?>

    <?= $form->field($model, 'status_krisma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_krisma')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'tgl_krisma')->widget(
            DatePicker::className(), [
        'value' => $model->tgl_krisma,
        'placeholder' => 'Format : YYYY-MM-D',
        'clientOptions' => [
            'format' => 'YYYY-MM-D',
        ],
    ]);
    ?>

    <?= $form->field($model, 'id_sts_kawin')->dropDownList($model::getListStsKawin(), ['prompt'=>'Pilih Status Kawin']) ?>

    <?= $form->field($model, 'id_jbt_sosial')->dropDownList($model::getListJbtSosial(), ['prompt'=>'Pilih Jabatan Sosial']) ?>

    <?= $form->field($model, 'tmp_tinggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun_mulai_tinggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_komuni')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sts_gerejawi')->dropDownList($model::getListStsGerejawi(), ['prompt'=>'Pilih Status Gerejawi']) ?>

    <?= $form->field($model, 'id_keterlibatan')->dropDownList($model::getListKeterlibatan(), ['prompt'=>'Pilih Keterlibatan']) ?>

    <?= $form->field($model, 'liberbap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_update')->textInput(['readonly'=>'']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
