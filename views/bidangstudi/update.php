<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BidangStudi */

$this->title = 'Update Bidang Studi: ' . $model->deskripsi_bidstudi;
$this->params['breadcrumbs'][] = ['label' => 'Bidang Studis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_bidstudi, 'url' => ['view', 'id' => $model->id_bidstudi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bidang-studi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
