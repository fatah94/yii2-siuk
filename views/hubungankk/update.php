<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HubunganKk */

$this->title = 'Update Hubungan KK: ' . $model->deskripsi_hub_kk;
$this->params['breadcrumbs'][] = ['label' => 'Data Hubungan Kepala Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_hub_kk, 'url' => ['view', 'id' => $model->id_hub_kk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hubungan-kk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
