<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Keterlibatan */

$this->title = 'Update Keterlibatan: ' . $model->deskripsi_keterlibatan;
$this->params['breadcrumbs'][] = ['label' => 'Data Keterlibatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deskripsi_keterlibatan, 'url' => ['view', 'id' => $model->id_keterlibatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="keterlibatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
