<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusPerkawinan */

$this->title = 'Update Status Perkawinan: ' . $model->deskripsi_sts_kawin;
$this->params['breadcrumbs'][] = ['label' => 'Data Status Perkawinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_sts_kawin, 'url' => ['view', 'id' => $model->id_sts_kawin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-perkawinan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
