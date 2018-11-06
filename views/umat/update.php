<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Umat */

$this->title = 'Update Umat: ' . $model->nama_anggota_rt;
$this->params['breadcrumbs'][] = ['label' => 'Data Umat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Keluarga '.$datakk['nama_anggota_rt'], 'url' => ['viewkk', 'id' => $datakk['np']]];
$this->params['breadcrumbs'][] = ['label' => $model->nama_anggota_rt, 'url' => ['view', 'id' => $model->id_umat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="umat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
