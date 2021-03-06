<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JabatanSosial */

$this->title = 'Update Jabatan Sosial: ' . $model->deskripsi_jbt_sosial;
$this->params['breadcrumbs'][] = ['label' => 'Data Jabatan Sosial', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_jbt_sosial, 'url' => ['view', 'id' => $model->id_jbt_sosial]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-sosial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
