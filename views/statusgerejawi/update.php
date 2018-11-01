<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StatusGerejawi */

$this->title = 'Update Status Gerejawi: ' . $model->deskripsi_sts_gerejawi;
$this->params['breadcrumbs'][] = ['label' => 'Data Status Gerejawi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_sts_gerejawi, 'url' => ['view', 'id' => $model->id_sts_gerejawi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-gerejawi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
