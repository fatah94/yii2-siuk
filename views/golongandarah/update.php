<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GolonganDarah */

$this->title = 'Update Golongan Darah: ' . $model->deskripsi_goldar;
$this->params['breadcrumbs'][] = ['label' => 'Data Golongan Darah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_goldar, 'url' => ['view', 'id' => $model->id_goldar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golongan-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
