<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusKesehatan */

$this->title = 'Update Status Kesehatan: ' . $model->id_sts_sehat;
$this->params['breadcrumbs'][] = ['label' => 'Status Kesehatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sts_sehat, 'url' => ['view', 'id' => $model->id_sts_sehat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-kesehatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
